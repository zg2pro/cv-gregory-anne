<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <ul class="cvnavitem"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">REFEREES</xsl:if>
                    <xsl:if test="$hl='fr'">RECOMMENDATIONS</xsl:if>
                </h2>
            </li>
        </ul>
        <xsl:if test="string-length(//linkedin/item) != 0">
            <h4>
                LINKEDIN
            </h4> 
        </xsl:if>
        <div class="dl">		
            <xsl:for-each select="//linkedin/item">	
                <div class="dt">
                    <xsl:element name="a">
                        <xsl:attribute name="href">
                            <xsl:value-of select="profile"/>
                        </xsl:attribute>
                        <xsl:value-of select="person"/>
                    </xsl:element>,
                    <i> 
                        <xsl:value-of disable-output-escaping="yes"  select="title"/>
                    </i>
                </div>
                <div class="dd">
                    <small>
                        <xsl:value-of disable-output-escaping="yes" select="text"/>
                    </small>
                    <br/>
                    <br/>
                </div>			
            </xsl:for-each>
        </div>
        <xsl:if test="string-length(//letters/item) != 0">
            <h4>
                <xsl:if test="$hl='en'">LETTERS</xsl:if>
                <xsl:if test="$hl='fr'">LETTRES</xsl:if>
            </h4>
        </xsl:if>
        <div class="dl">
            <xsl:for-each select="//letters/item">
                <div class="dt">
                    <xsl:element name="a">
                        <xsl:attribute name="href">mailto:<xsl:value-of select="email"/></xsl:attribute>
                        <xsl:value-of select="person"/>
                    </xsl:element>
			
                </div>
                <div class="dd">
                    <xsl:value-of disable-output-escaping="yes"  select="title"/>
                </div>
                <div class="dd">
                    <xsl:element name="a">
                        <xsl:attribute name="href">../pdf/<xsl:value-of select="normalize-space(letter)"/></xsl:attribute>
                        Letter (pdf)
                    </xsl:element>
                    <br/>
                    <br/>
                </div>
            </xsl:for-each>
        </div>
    </xsl:template>
</xsl:stylesheet>
