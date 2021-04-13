<template>
  <div class="my-auto">
    <h2 class="mb-5">{{ $t("educationDegrees.title") }}</h2>
    <div v-html="outXmlString"></div>
        <br/>
        <br/>
        <table class="university-logos" align="center">
            <tr>
                <td>
                    <a href="http://www.univ-tln.fr/">
                        <img src="@/assets/img/u_toulon.png" width="300" height="44"
                                 border="0" alt="Universite de Toulon et du Var (83)"/>
                    </a>
                </td>
                <td>
                    <a href="http://www.ujf-grenoble.fr/">
                        <img src="@/assets/img/UJFlogo.gif" width="300" height="77"
                                 border="0" alt="Universite Joseph Fourier	Grenoble I (38)"/>
                    </a>
                </td>
                <td>
                    <a href="http://www.univ-cezanne.fr/">
                        <img src="@/assets/img/logo_u3.jpg" width="300" height="70"
                                 border="0" alt="Universite Aix-Marseille III (13)"/>
                    </a>
                </td>
            </tr>
        </table>
        <br/>
        <br/>
        <br/>
  </div>
</template>

<script>
import { xsltProcess, xmlParse } from 'xslt-processor';
import xmlString from '@/assets/xml/education.xml';
import xslString from '@/assets/xsl/education.xsl';

export default {
  data() {
    return {
      outXmlString: null
    };
  },
  mounted() {
    this.xsltProcess();
  },
  methods: {
    xsltProcess() {
      let xml = xmlParse(xmlString);
      let xsl = xmlParse(xslString);
      this.outXmlString = xsltProcess(
	      xml,
	      xsl
      );
    },
  }
};
</script>
