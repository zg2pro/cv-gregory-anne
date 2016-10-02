<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE stylesheet [
<!ENTITY Eacute  "&Eacute;" >
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="//organization">
        <xsl:element name="a">
            <xsl:attribute name="href">
                <xsl:value-of disable-output-escaping='yes' select='link'/>
            </xsl:attribute> 
            <xsl:value-of disable-output-escaping='yes' select='logo'/>
        </xsl:element>
        <br/>
        <xsl:value-of disable-output-escaping='yes' select='location'/>
    </xsl:template>
    
    <xsl:template match="//experience">
        <ul class="cvnavitem"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">
                        PROFESSIONAL EXPERIENCE
                    </xsl:if>
                    <xsl:if test="$hl='fr'">
                        EXPERIENCES PROFESSIONNELLES
                    </xsl:if>
                </h2>
            </li>
        </ul>
        <table align="center" border="2" 
                       summary="your browser cannot display tables" class="table-bordered">
            <thead> 
                <tr>
                    <xsl:if test="$hl='en'">
                        <th>Organization</th>
                        <th>Date</th>
                        <th>Role / Nature of work</th>
                    </xsl:if>
                    <xsl:if test="$hl='fr'">
                        <th>Employeur</th>
                        <th>Date</th>
                        <th>Emploi / Nature du Travail</th>
                    </xsl:if>
                </tr>
            </thead>
            <tbody>
                <xsl:for-each select="//item">
                    <tr>
                        <td>
                            <xsl:apply-templates select="organization" />
                        </td>
                        <td>
                            <xsl:value-of disable-output-escaping="yes" select="date"/>
                        </td>
                        <td>
                            <xsl:value-of disable-output-escaping="yes" select="role"/>
                        </td>
                    </tr>
                </xsl:for-each>
            </tbody>
        </table>
    </xsl:template>
    
		
</xsl:stylesheet>