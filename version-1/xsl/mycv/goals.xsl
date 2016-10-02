<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE stylesheet [
<!ENTITY Eacute  "&Eacute;" >
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <ul class="cvnavitem"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">GOALS</xsl:if>
                    <xsl:if test="$hl='fr'">OBJECTIFS</xsl:if>
                </h2>
            </li>
        </ul>
        <ol>
            <xsl:for-each select="//item">
                <li>
                    <xsl:value-of disable-output-escaping="yes"  select="title"/>
                    <xsl:value-of disable-output-escaping="yes"  select="text"/>
                </li>
            </xsl:for-each>
        </ol>
    </xsl:template>
	
</xsl:stylesheet>