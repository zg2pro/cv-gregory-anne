

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <ul class="cvnavitem"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">HANDS-ON COURSES
                    </xsl:if>
                    <xsl:if test="$hl='fr'">FORMATION CONTINUE</xsl:if>
                </h2>
            </li>
        </ul>
        <ul>
            <xsl:for-each select="//item">
                <li>
                    <xsl:value-of disable-output-escaping="yes"  select="year"/>: <xsl:value-of disable-output-escaping="yes"  select="title"/>
                    <br/>
                    <xsl:value-of disable-output-escaping="yes"  select="text"/>
                    <br/>
                    <br/>
                </li>
            </xsl:for-each>
        </ul>
        <br/>
        <br/>
        <table class="university-logos" align="center">
            <tr>
                <td>
                    <a href="http://www.orsys.fr/"> 
                        <img src="../img/orsys.jpg" width="240" height="44" 
                     border="0" alt="Orsys"/>
                    </a> 
                </td>
            </tr>
        </table>
    </xsl:template>
</xsl:stylesheet>