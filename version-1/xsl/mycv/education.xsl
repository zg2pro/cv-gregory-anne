<!DOCTYPE stylesheet [
<!ENTITY Eacute  "&Eacute;" >
]>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <ul class="breadcrumb"> 
            <li class="active">
                <h2>
                    <xsl:if test="$hl='en'">EDUCATION (French Awards)
                    </xsl:if>
                    <xsl:if test="$hl='fr'">FORMATION INITIALE</xsl:if>
                </h2>
            </li>
        </ul>
        <ul>
            <xsl:for-each select="//item">
                <li>
                    <xsl:value-of disable-output-escaping="yes"  select="year"/>: 
                    <xsl:value-of disable-output-escaping="yes"  select="degree/title"/>
                    <br/>
                    <xsl:value-of disable-output-escaping="yes"  select="degree/mention"/>
                    <br/>
                    <xsl:value-of disable-output-escaping="yes"  select="degree/school"/>
                    <br/>
                    <xsl:value-of disable-output-escaping="yes"  select="text"/>
                    <br/>
                    <br/>
                </li>
            </xsl:for-each>
        </ul>
        <br/>
        <br/>
        <table align="center">
            <tr>
                <td>
                    <a href="http://www.univ-tln.fr/"> 
                        <img src="../img/u_toulon.png" width="300" height="44" 
                                     border="0" alt="Universite de Toulon et du Var (83)"/>
                    </a> 
                </td>
                <td>
                    <a href="http://www.ujf-grenoble.fr/">
                        <img src="../img/UJFlogo.gif" width="300" height="77" 
                                     border="0" alt="Universite Joseph Fourier	Grenoble I (38)"/>
                    </a>
                </td>
                <td>
                    <a href="http://www.univ-cezanne.fr/"> 
                        <img src="../img/logo_u3.jpg" width="300" height="70" 
                                     border="0" alt="Universite Aix-Marseille III (13)"/>
                    </a> 
                </td>
            </tr>
        </table>
        <br/>
        <br/>
        <br/>
    </xsl:template>
</xsl:stylesheet>