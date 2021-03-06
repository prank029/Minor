<?xml version="1.0" encoding="UTF-8"?>
 
<config charset="UTF-8">
 
    <!-- set initial page -->
    <var-def name="home">http://web-harvest.sourceforge.net/index.php</var-def>
 
    <!-- define script functions and variables -->
    <script><![CDATA[
        /* checks if specified URL is valid for download */
        boolean isValidUrl(String url) {
            String urlSmall = url.toLowerCase();
            return urlSmall.startsWith("http://web-harvest.sourceforge.net/") && urlSmall.endsWith(".php");
        }
 
        /* create filename based on specified URL */
        String makeFilename(String url) {
            return url.replaceAll("http://|https://|file://", "");
        }
 
        /* set of unvisited URLs */
        Set unvisited = new HashSet();
        unvisited.add(home);
 
        /* pushes to web-harvest context initial set of unvisited pages */
        SetContextVar("unvisitedVar", unvisited);
 
        /* set of visited URLs */
        Set visited = new HashSet();
    ]]></script>
 
    <!-- loop while there are any unvisited links -->
    <while condition="${unvisitedVar.toList().size() != 0}">
        <loop item="currUrl">
            <list><var name="unvisitedVar"/></list>
            <body>
                <empty>
                    <var-def name="content">
                        <html-to-xml>
                            <http url="${currUrl}"/>
                        </html-to-xml>
                    </var-def>
 
                    <script><![CDATA[
                        currentFullUrl = sys.fullUrl(home, currUrl);
                    ]]></script>
 
                    <!--  saves downloaded page -->
                    <file action="write" path="spider/${makeFilename(currentFullUrl)}.html">
                        <var name="content"/>
                    </file>
 
                    <!-- adds current URL to the list of visited -->
                    <script><![CDATA[
                        visited.add(sys.fullUrl(home, currUrl));
                        Set newLinks = new HashSet();
                        print(currUrl);
                    ]]></script>
 
                    <!-- loop through all collected links on the downloaded page -->
                    <loop item="currLink">
                        <list>
                            <xpath expression="//a/@href">
                                <var name="content"/>
                            </xpath>
                        </list>
                        <body>
                            <script><![CDATA[
                                String fullLink = sys.fullUrl(home, currLink);
                                if ( isValidUrl(fullLink.toString()) && !visited.contains(fullLink) && !unvisitedVar.toList().contains(fullLink) ) {
                                    newLinks.add(fullLink);
                                }
                            ]]></script>
                        </body>
                    </loop>
                </empty>
            </body>
        </loop>
 
        <!-- unvisited link are now all the collected new links from downloaded pages  -->
        <script><![CDATA[
             SetContextVar("unvisitedVar", newLinks);
        ]]></script>
    </while>
 
</config>