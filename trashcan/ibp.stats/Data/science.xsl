<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" />
	<xsl:template match="rss/channel">
		<table style="font-family:verdana;">
		<tr>
			<th bgcolor="#006400" style="border:1px solid black;">
				<div align="left" style="font-size:11pt; color:#F5F5DC;">
					<xsl:value-of select="title" />
				</div>
				<div style="font-size:8pt; color:#F5F5DC;" align="right">
					<xsl:value-of select="lastBuildDate" />
				</div>	
			</th>
		</tr>
		<xsl:for-each select="item">
			<xsl:if test="(position() &lt; 8)">
				<xsl:variable name="link" select="link"/> 
				<tr>
					<td>
						<a href="{$link}" target="_blank" style="color:blue; font-size:small; text-decoration:none;" OnMouseOver="this.style.color='red';this.style.textDecoration='underline';" OnMouseOut="this.style.color='blue';this.style.textDecoration='none';">
						<xsl:value-of select="title" />
						</a>
					</td>
				</tr>
				<tr>
					<td style="font-size:xx-small; color:black;">
						<xsl:value-of select="description" />
					</td>
				</tr>
			</xsl:if>
		</xsl:for-each>		
		</table>
	</xsl:template> 
</xsl:stylesheet> 



  