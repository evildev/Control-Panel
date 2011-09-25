{if $showno==1}
{$content}
{else}
<head>
<title>
{$titel}
{$aktuelleseite}
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="imagetoolbar" content="no">
<script language="JavaScript" src="templates/{$theme}/js/func.js" type="text/javascript"></script>
<link href="templates/{$theme}/{$css_sheme}/style.css" rel="stylesheet" type="text/css" />
<style>
body{ldelim}margin: 0 0 0 0;padding: 0 0 0 0;{rdelim}

</style>
</head>
<body>
<div style="padding:1px">{$content}</div>
</body>
</html>{/if}
