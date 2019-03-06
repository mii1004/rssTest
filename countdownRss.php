<?php
$date = new DateTime();
$orympicDate = new DateTime('2020-07-24');
$updateDate = $date->format(DateTime::RSS);
$countDown = $date->diff($orympicDate);
echo '
    <rss version=¥"2.0¥">
        <channel>
                <title>東京オリンピックカウントダウン</title>
                <lastBuildDate>$updateDate</lastBuildDate>
            <item>
                <title>残り$countDown日</title>
                <description>東京オリンピックまで残り$countDown日です。</description>
                <pubDate>$updateDate</pubDate>
            </item>
        </channel>
    </rss>
'

?>
