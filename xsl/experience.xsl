<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" />
    <xsl:template match="//item">
	
        <div class="slide">
            <table style="margin-left: 40%; color: white;">
                <tr>
                    <td>
                        <xsl:value-of disable-output-escaping="yes" select="organization/logo"/>
                    </td>
                    <td>
                        <xsl:value-of disable-output-escaping="yes" select="organization/location"/>
                        <br/>
                        <xsl:value-of disable-output-escaping="yes" select="date"/>
                    </td>
                </tr>
            </table>
            <div class="description" style="margin-top: 1%; margin-left: 5%; width: 70%; text-align: left;font-size: 13px;">
                <xsl:value-of disable-output-escaping="yes" select="role"/>
            </div>
        </div>
    </xsl:template>	
</xsl:stylesheet>