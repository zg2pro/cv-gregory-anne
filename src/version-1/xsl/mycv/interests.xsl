<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE stylesheet [
<!ENTITY nbsp  "&nbsp;" >
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <ul class="cvnavitem"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">INTERESTS AND HOBBIES</xsl:if>
                    <xsl:if test="$hl='fr'">LOISIRS ET INTERETS PERSONNELS</xsl:if>
                </h2>
            </li>
        </ul>
        <xsl:apply-templates/>
    </xsl:template>	
    <xsl:template match="//item[position()=1]">
        <xsl:value-of disable-output-escaping="yes"  select="text"/>
        <br/>
        <br/>
    </xsl:template>
	
    <xsl:template match="//item[(position()!=1) and (position()!=last())]">
        <div align="center">
            <xsl:value-of disable-output-escaping="yes"  select="text"/>
        </div>
        <br/>
        <br/>
    </xsl:template>
	
    <xsl:template match="//item[position()=last()]">
        <div class="interests-last-element">
            <xsl:value-of disable-output-escaping="yes"  select="text"/>
        </div>
    </xsl:template>
	
</xsl:stylesheet>