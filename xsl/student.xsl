<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="//student[course='PG']/firstname">First names: <xsl:value-of select="text()"></xsl:value-of></xsl:template>
    <xsl:template match="//student/lastname">Last name: <xsl:value-of select="text()"></xsl:value-of></xsl:template>
    <xsl:template match="//student/course">Course: <xsl:value-of select="text()"></xsl:value-of><br /></xsl:template>


    <xsl:template match="/">
        <h2>Student Details</h2>
        <table border="true">
            <xsl:for-each select="//student[course='PG']">
                <tr>
                    <td>
                        <xsl:value-of select="firstname"/>
                    </td>
                    <td>
                        <xsl:value-of select="lastname"/>
                    </td>
                    <td>
                        <xsl:value-of select="course"/>
                    </td>
                </tr>
            </xsl:for-each>
        </table>
    </xsl:template>

</xsl:stylesheet>