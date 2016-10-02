<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE stylesheet [
<!ENTITY Eacute  "&Eacute;" >
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <ul class="cvnavitem"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">STATISTICS</xsl:if>
                    <xsl:if test="$hl='fr'">STATISTIQUES</xsl:if>
                </h2>
            </li>
        </ul>
        <div class="stats-table">
            <table>
                <tr>
                    <xsl:for-each select="//item">
                        <td>
                            <strong>
                                <xsl:value-of disable-output-escaping="yes" select="title"/>
                            </strong>
                            <br/>
                            <xsl:value-of disable-output-escaping="yes" select="logo"/>
                        </td>
                    </xsl:for-each>
                </tr>
            </table>
        </div>
        <br/>
        <br/>
    </xsl:template>
</xsl:stylesheet>