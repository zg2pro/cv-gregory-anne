<!DOCTYPE stylesheet [
<!ENTITY Eacute  "&Eacute;" >
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <!--ul class="cvnavitem">
            <li class="active">
                <h2>
                    EDUCATION (French Awards)
                </h2>
            </li>
        </ul-->
        <ul>
            <xsl:for-each select="//item">
                <li>
                    <xsl:value-of disable-output-escaping="yes"  select="year"/>:
                    <xsl:value-of disable-output-escaping="yes"  select="degree/title"/>
                    <br/>
                    <xsl:value-of disable-output-escaping="yes"  select="degree/mention"/>
                    <xsl:if test="string-length(degree/mention) != 0">
                        <br/>
                    </xsl:if>
                    <xsl:value-of disable-output-escaping="yes"  select="degree/school"/>
                    <br/>
                    <xsl:value-of disable-output-escaping="yes"  select="text"/>
                    <br/>
                    <br/>
                </li>
            </xsl:for-each>
        </ul>
    </xsl:template>
</xsl:stylesheet>
