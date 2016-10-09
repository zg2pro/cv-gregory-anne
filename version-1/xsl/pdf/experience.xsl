<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="//item">
	<div class="slide">
            <table>
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
            <div class="description">
                <xsl:value-of disable-output-escaping="yes" select="role"/>
            </div>
        </div>
    </xsl:template>	
</xsl:stylesheet>