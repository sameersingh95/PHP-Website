<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>
            <body>
			<center>
                <h2><font face="verdana">OTHER PROGRAMMING LANGUAGES</font></h2>
				
                <table border="1" style="border-collapse:collapse">
                    <tr bgcolor="#333">
                        <th style="color:white; padding: 5px;">Name</th>
                        <th style="color:white; padding: 5px;">Developed By</th>
                        <th style="color:white; padding: 5px;">Year</th>
						<th style="color:white; padding: 5px;">Website link</th>
                    </tr>

                    <xsl:for-each select="Programming_Languages/lang">
                        <tr bgcolor="skyblue">
						
                            <td style="padding:5px"><xsl:value-of select="name" /> </td>
                            <td style="padding:5px"><xsl:value-of select="developedby" /> </td>
                            <td style="padding:5px"><xsl:value-of select="year" /> </td>
							<td style="padding:5px"><a href="http://www.w3schools.com"><xsl:value-of select="link" /></a></td>
                        </tr>
                    </xsl:for-each>
                </table></center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>


