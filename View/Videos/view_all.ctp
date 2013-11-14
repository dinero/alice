
<?php //$v = @$_GET['v']; ?>

<div id="contentBody" class="row">
    <div class="videoCont">
        <?php if (!empty($videoP)): ?>
            
            <div id="videoContainer" class="columns">
                <h1><?php echo $videoP['Video']['titulo']; ?></h1>
                <div class="paddingV">
                    <div id="video" class="flex-video">
                        [youtube=<?php echo $videoP['Video']['url']; ?>]
                    </div>
                </div>
                <script type="text/javascript">
                    $(function(){
                        $.mb_videoEmbedder.defaults.width=$("#video").width();
                        $("#video").mb_embedMovies();
                        $("#video").mb_embedAudio();
                    });
                </script>
            </div>

        <?php endif ?>

        <?php if (!empty($allV) and $allV != ''): ?>

            <div class="videoBottom">
                <h2>Otros Videos</h2>
                <div class="content">

                    <?php if (is_array($allV)): ?>

                        <?php foreach ($allV as $aV): ?>
                            
                            <div class="video large-3 small-6 columns">
                                <a href="<?php echo $this->Html->url(array('controller'=>'Videos','action'=>'view/'.$aV['Video']['id'])); ?>" class="getVideo">
                                    <div class="image">
                                        <div class="play">
                                            <?php echo $this->Html->image(
                                                'play.png'
                                            ); ?>
                                        </div>
                                        <?php
                                        $video = explode('&',$aV['Video']['url']);
                                        $video = explode('=', $video[0]);
                                        if (isset($video[1]))
                                            $video = $video[1];
                                        else
                                            $video = $video[0];

                                        echo $this->Html->image(
                                            'http://img.youtube.com/vi/'.$video.'/0.jpg'
                                        ); ?>
                                    </div>
                                    <h3><?php echo $aV['Video']['titulo']; ?></h3>
                                </a>                  
                            </div>

                        <?php endforeach ?>
                        
                    <?php endif ?>

                </div>
                <div class="clear" style="height:1.5em;"></div>

                <section class="pagination clear">
                    <?php
                    echo $this->Paginator->prev('«', null, null, array('class' => 'disabled prev'));
                    echo $this->Paginator->numbers(
                        array(
                            'separator'=>'',
                            'tag'=>'span',
                            'class'=>'numbers rad'
                        )
                    ); 
                    echo $this->Paginator->next('»', null, null, array('class' => 'disabled next'));
                    ?>
                </section>
            </div>
            
        <?php endif ?>
        <div class="clear"></div>
    </div>
    
    <?php if (!empty($pubVidH['Image'])): ?>

        <div class="pubIntoH">
            <?php echo $this->Html->image(
                '/files/'.$pubVidH['Image']['seccion'].'/'.$pubVidH['Image']['id'].'.'.$pubVidH['Image']['extension'],
                array(
                    'alt' => $pubVidH['Ad']['nombre'],
                    'url' => $pubVidH['Ad']['link']
                )
            ); ?>
        </div>
        
    <?php endif ?>

</div>

<script type="text/javascript">
    $('.getVideo').click(function(event){
        event.preventDefault();
        url = $(this).attr('href');
        $('#videoContainer').getVideo(url);
    });
</script>