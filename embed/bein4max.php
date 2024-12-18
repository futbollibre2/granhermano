
<html lang="es"> 
<meta name="robots" content="noindex" /> 
<script src="//cdn.jsdelivr.net/npm/@clappr/player@0.4.0/dist/clappr.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/mux.js@5.6.7/dist/mux.min.js"></script> 
<script src='//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js'></script> 
<script src='//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js'></script> 
<script src='//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js'></script> 
<script src='//cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js'></script> 
<script src="//cdn.jsdelivr.net/npm/shaka-player@2.5.10/dist/shaka-player.compiled.min.js"></script> 
<script src="//cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.external.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/cdnbye-shaka@latest"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script type="text/javascript" src="../js/aclib.js"></script>
<script type="text/javascript">
  aclib.runPop({
      zoneId: '8995174',
  });
</script>
        <style>  
 
.player-poster[data-poster] { 
  background-size: cover; 
} 
body{ 
  margin:0; 
  padding:0; 
} 
 
</style> 
</head> 
<div id="player"></div> 
<script> 
var player = new Clappr.Player({ 
        source: 'https://api-proxad.dc2.oqee.net/playlist/v1/live/972/1/live.mpd', 
        mimeType: 'application/dash+xml', 
        height: '100%', 
        width: '100%', 
        plugins: [LevelSelector, DashShakaPlayback, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, Clappr.MediaControl], 
        events: {onReady: function() {var plugin = this.getPlugin('click_to_pause'); plugin && plugin.disable();},}, 
        chromecast: { 
            appId: '9DFB77C0', 
            contentType: 'video/mp4', 
        }, 
        shakaConfiguration: { 
            drm: { 
            clearKeys: { 
                    '9bc136d8d6c860b62e0adac003e4d3d9': 'ae5c9a9e504a4fe273760c80e7fe1eae', 
                    '02ad8d8ffd80b50567796e694b7a2927': '07ce8279537ed26fe831b5343aa55969', 
                    'd1140f0b87723297fc1a3820d989537f': '37c78b5fbbd97216b4813e135ab2c1ea',
                    'b6d0b6217c70b0f705002a070771b084': '746c02d1e6884fe2e4411624ba055528'
                    } 
            }, 
            preferredAudioLanguage: 'pt-BR', 
        }, 
        shakaOnBeforeLoad: function (shaka_player) {}, 
        parentId: '#player' 
    }); 
</script>