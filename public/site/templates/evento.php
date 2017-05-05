<?php include('./_head.php');
    $field = $fields->get('category');
    $all_options = $field->type->getOptions($field);
    $pagination=20;
    $cur = $input->pageNum;
    $max = (count($page->images)) / $pagination;
    $next = $cur<$max ? $cur + 1 : false;
    $prev = $cur>1 ? $cur - 1 : false;
    $ini = $cur==1 ? 0 : ($cur-1)*$pagination;
    if($cur-1>$max) $session->redirect("/");
    ?>
<div class="j-workspace">
     <div class="j-wrap sub-categories-container">
       <ul class="sub-categories">
       <a href="<?php echo $config->urls->root; ?>">
           <li>Recientes</li>
         </a>
       <?php foreach ($all_options as $option) { ?>
        <a href="<?php echo $config->urls->root; ?>categoria/<?php echo $option->value; ?>">
           <li><?php echo $option->title; ?></li>
         </a>
        <?php } ?>
        <a href="<?php echo $config->urls->root; ?>videos">
           <li>Videos</li>
         </a>
       </ul>
       <select name="categories" id="categories">
         <option value="Seleccionar">Categorias</option>
         <option value="recientes">Recientes</option>
         <?php foreach ($all_options as $option) { ?>
         <option value="<?php echo $option->value; ?>"><?php echo $option->title; ?></option>
         <?php } ?>
         <option value="videos">Videos</option>
       </select>
     </div>
   </div>
   <div class="j-workspace albums-grid">
     <div class="j-wrap">
      <h2><?php echo $page->category->title; ?> / Evento: <?php echo $page->title; ?></h2>
       <div class="grid">
        <?php $id=0; 
        $images=$page->images->find("start=$ini, limit=$pagination");
          foreach ($images as $image) { 
                $id++;
                $img_2x = $image->width(1200, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?> 
         <div class="unit one-quarter album-unit">
           <div class="image-album" <?php if($img_2x) {?>style="background-image:url('<?php echo $img_2x->url; ?>'); <?php } ?>">
             <div class="image-album-overlay">
                <a href="<?php echo $img_2x->url; ?>" data-fancybox="gallery" <?php if(!$detect->isMobile() || $detect->isTablet()) { ?>  data-caption="<?php echo ($image->description) ? 'Descripción: '.$image->description:''; echo ($image->autor) ? '<br>Autor: '.$image->autor:''; echo ($image->dateoriginal) ? '<br>Fecha: '.$image->dateoriginal:''; if($image->city || $image->pais || $image->lugar) echo '<br>'; echo ($image->city) ? '  Ciudad: '.$image->city:''; echo ($image->pais) ? '  País: '.$image->pais:''; echo ($image->lugar) ? ' Lugar: '.$image->lugar:''; echo ($image->tags) ? '$'.$image->tags:''; ?>" <?php } ?>>
                  <p>Ver</p>
                </a>
                <?php if($user->hasRole('administrator') || $user->hasRole('superuser') || $user->hasRole('manager')){ ?> 
                  <a onclick="dFoto('<?php echo $id; ?>'); return false;" id="download-album" href="">
                    <input type="hidden" id="chk-<?php echo $id ?>" name="checksum" value="<?php echo k::encrypt($image.'<>'.$image->filename.':'.time()); ?>">
                    <p>Descargar</p>
                  </a>
                <?php } ?>
                <?php if($user->hasRole('administrator') || $user->hasRole('superuser') || $page->createdUser == $user){ ?> 
                  <a href="<?php echo $config->urls->admin ?>page/edit/?id=<?php echo $page->id; ?>">
                    <p>Modificar</p>
                  </a>
                <?php } ?>
             </div>
           </div>
           <?php $name=explode(".", $image->basename); ?>
           <a data-fancybox data-src="<?php echo $config->urls->root;?>foto?page=<?php echo $page->id.'&image='.$name[0].'&ext='.$name[1]; ?>" href="javascript:;">
           <h3><?php echo $name[0]; ?></h3>
           </a>
         </div>
        <?php } ?> 
       </div>
     </div>
   </div>
   
<?php include('./_foot.php'); ?>
<script type="text/javascript">
var pagina=1;
  $(window).scroll(function(){
    if ($(window).scrollTop() == $(document).height() - $(window).height()){
      pagina++;
      cargardatos();
    }                                       
  });
  function cargardatos(){ 
    $.get("/datos-evento?pagina="+pagina+"&current=<?php echo $page->id; ?>",
      function(data){
        if (data != "") {
          $(".album-unit:last").after(data); 
        }
      });                              
  }
  function dFoto(idFoto){
    window.location="<?php echo $config->urls->root;?>"+"individual?checksum="+$("#chk-"+idFoto).val();;
  } 
$('[data-fancybox]').fancybox({
  image : {
    protect: true
  },
  iframe:{
    scrolling: 'yes'
  },
<?php if($user->hasRole('administrator') || $user->hasRole('superuser') || $user->hasRole('manager')){  ?>  
  onInit : function(instance) {
    instance.$refs.downloadButton = $('<a download class="fancybox-button fancybox-download"></a>')
      .appendTo( instance.$refs.buttons );
  },
  beforeMove: function(instance, current) {
    var image_original=current.src.replace(".1200x0","");
    instance.$refs.downloadButton.attr('href', image_original);
  },
  <?php } 
  if(!$detect->isMobile() || $detect->isTablet()) { ?> 
  caption : function( instance, item ) {
    var originalCaption, caption, link="Etiquetas: ", tags;
    if (item.type === 'image') {
      originalCaption=$(this).data('caption').split('$');
      caption = originalCaption[0];
      if(originalCaption[1]){
        tags=originalCaption[1].split(',');
        $.each(tags, function(key,value) {
          if(key==(tags.length-1))
            link+='<a href="/etiquetas/' + value.replace(" ","-") + '">'+value+'</a>';
          else
            link+='<a href="/etiquetas/' + value.replace(" ","-") + '">'+value+'</a>, ';
        });
        return (caption ? caption + '<br />' : '') + link;
      }else{
        return caption;
      }
    }
  }
 <?php } ?> 
});
</script>