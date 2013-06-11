<script id="personTemplate" type="text/x-jquery-tmpl">
    <section class="person">
        <img src="http://cs406922.vk.me/u185881393/e_95fde559.jpg" alt="${ name }" />
        <h1>${ name }</h1>
        <address>${ address }</address>
        <span class="tel">${ tel }</span>
        <a href="http://${ site }" title="Visit site">${ site }</a>
        <div class="tools">
            <button data-bind="click: deleteMe">Delete</button>
        </div>
    </section>
</script>

<script id="routComponent" type="text/x-jquery-tmpl">
  <div class="rout-component">
  
    <div class="router">
      <div class="router-menu"><i></i>Какам транспортом добираться?</div>
    </div>
    
    
    <div class="input-append" style="width: 260px; margin: 0 auto; display: block;">
      <input type="text" placeholder="Пункт прибытия" value="">
      <button class="btn" type="button"><i class="icon-map-marker"></i></button>
      <a class="deleter" href="javascript:;">удалить</a>
    </div>
    
    <div style="margin: 0 auto; width: 143px;">
      <button class="btn btn-small" onclick="addRoutComponent(this)">Добавить маршрут</button>
    </div>
  </div>
</script>
