<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Pikiran Rakyat Online</title>
				<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
<center>

	<div class="feedbody">
		<div class="header"><a href="http://www.pikiran-rakyat.com/" target="_blank"><img alt="Pikiran Rakyat Online" src="logo.png"></a></div>
    
	<div style="clear:both"></div>
        <div class="sidebarleft">
                <b>Nama Anggota &amp; NPM:</b>
                <hr>
					<table>
						<tr>
							<td>
								<?php
                                      $dom= new DomDocument("1.0");
                                      $dom ->load("nama-npm.xml");
                                      $tampilnama =$dom->getElementsByTagName("nama");
                                      for ($i=0; $i<$tampilnama->length; $i++)
                                      	{
                                          echo $tampilnama->item($i)->nodeValue."<br/>";
                                        }
                                ?>
                            </td>
							<td>
								<?php
                                    $dom= new DomDocument("1.0");
                                    $dom ->load("nama-npm.xml");
                                    $tampilnpm =$dom->getElementsByTagName("npm");
                                    for ($i=0; $i<$tampilnpm->length; $i++)
                                    {
                                        echo $tampilnpm->item($i)->nodeValue."<br/>";
                                    }
                                ?>
							</td>
						</tr>
					</table>
                    <br />
                    <br />
                    <b>RSS Feed OLAHRAGA</b>
                <hr>
					<?php
						$html = "";
						$url = "http://www.pikiran-rakyat.com/feed/persib"; 
						$xml = simplexml_load_file($url);
						for($i = 0; $i < 1; $i++)
							{
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
																	
								$html .= "<a href='$link' target='_blank'><h3>$title</h3></a>";
								$html .= "$description<br>";
								$html .= "<br> $pubDate<hr />";
							} 
						echo $html;
					?>
                    </div>
                    
				<div class="sidebarright">
                <b>RSS Feed BERITA TERKINI</b>
                <hr>
					<?php
						$html = "";
						$url = "http://www.pikiran-rakyat.com/rss/feed.xml"; 
						$xml = simplexml_load_file($url);
						for($i = 0; $i < 2; $i++)
							{
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
																	
								$html .= "<a href='$link' target='_blank'><h3>$title</h3></a>";
								$html .= "$description<br>";
								$html .= "<br> $pubDate<hr />";
							} 
						echo $html;
					?>
                    
			</div>
		
        <div style="clear:both">
		</div>
        </div>
        <div class="footer">Tugas Layanan Web - Teknik Informatika - Universitas Siliwangi - 2014</div>

</center>
</body>
</html>