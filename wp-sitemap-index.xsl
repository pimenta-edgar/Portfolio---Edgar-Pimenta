<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet
		version="1.0"
		xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
		exclude-result-prefixes="sitemap"
		>

	<xsl:output method="html" encoding="UTF-8" indent="yes" />

	<!--
	  Set variables for whether lastmod occurs for any sitemap in the index.
	  We do this up front because it can be expensive in a large sitemap.
	  -->
	<xsl:variable name="has-lastmod" select="count( /sitemap:sitemapindex/sitemap:sitemap/sitemap:lastmod )" />

	<xsl:template match="/">
		<html lang="pt-PT">
			<head>
				<title>Sitemap em XML</title>
				<style>
					
					body {
						font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
						color: #444;
					}

					#sitemap {
						max-width: 980px;
						margin: 0 auto;
					}

					#sitemap__table {
						width: 100%;
						border: solid 1px #ccc;
						border-collapse: collapse;
					}

			 		#sitemap__table tr td.loc {
						/*
						 * URLs should always be LTR.
						 * See https://core.trac.wordpress.org/ticket/16834
						 * and https://core.trac.wordpress.org/ticket/49949
						 */
						direction: ltr;
					}

					#sitemap__table tr th {
						text-align: left;
					}

					#sitemap__table tr td,
					#sitemap__table tr th {
						padding: 10px;
					}

					#sitemap__table tr:nth-child(odd) td {
						background-color: #eee;
					}

					a:hover {
						text-decoration: none;
					}

				</style>
			</head>
			<body>
				<div id="sitemap">
					<div id="sitemap__header">
						<h1>Sitemap em XML</h1>
						<p>Este sitemap em XML é gerado pelo WordPress para tornar o seu conteúdo mais visível para os motores de pesquisa.</p>
						<p><a href="https://www.sitemaps.org/">Saiba mais sobre sitemaps em XML.</a></p>
					</div>
					<div id="sitemap__content">
						<p class="text">Quantidade de URL neste sitemap em XML: <xsl:value-of select="count( sitemap:sitemapindex/sitemap:sitemap )" />.</p>
						<table id="sitemap__table">
							<thead>
								<tr>
									<th class="loc">URL</th>
									<xsl:if test="$has-lastmod">
										<th class="lastmod">Última modificação</th>
									</xsl:if>
								</tr>
							</thead>
							<tbody>
								<xsl:for-each select="sitemap:sitemapindex/sitemap:sitemap">
									<tr>
										<td class="loc"><a href="{sitemap:loc}"><xsl:value-of select="sitemap:loc" /></a></td>
										<xsl:if test="$has-lastmod">
											<td class="lastmod"><xsl:value-of select="sitemap:lastmod" /></td>
										</xsl:if>
									</tr>
								</xsl:for-each>
							</tbody>
						</table>
					</div>
				</div>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
<!-- permalink_structure ends with slash (/) but REQUEST_URI does not end with slash (/) -->