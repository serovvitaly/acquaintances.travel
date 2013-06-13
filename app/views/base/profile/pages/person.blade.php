<div class="row-fluid">
  <div class="span8">
    <div class="person-header">
      <section class="person-title"><h1>{{$person->name}}</h1></section>
      <section class="person-age"><h2>{{$person->age}} лет</h2></section>
    </div>
    <div class="person-actions">
      <div class="btn-group">
        <button class="btn btn-large">Пообщаться</button>
        <button class="btn btn-large">Пригласить</button>
        <button class="btn btn-large">Сделать подарок</button>
      </div>
      <ul class="extra">
        <li><a href="#" onclick="return false;">Добавить в избранное</a></li>
        <li><a href="#" onclick="return false;">Заблокировать</a></li>
        <li><a href="#" onclick="return false;">Пожаловаться</a></li>
      </ul>
    </div>
  </div>
  <div class="span4">
    <div class="person-image">
      <img src="/data/img/{{$person->id}}.jpg" alt="">
    </div>
  </div>
</div>

<div class="row-fluid">
  <div class="span8">
    <div class="row-fluid">
      <div class="span6">
        <div>
          <fieldset>
            <legend>Типаж</legend>
            <table>
              <tr><td>Рост</td><td>178</td></tr>
              <tr><td>Вес</td><td>65</td></tr>
              <tr><td>Телосложение</td><td>стройное</td></tr>
              <tr><td>Цвет глаз</td><td>карие</td></tr>
              <tr><td>Цвет волос</td><td>светлые</td></tr>
              <tr><td>Волосы</td><td>прямые</td></tr>
              <tr><td colspan="2"><a>Развернуть</a></td></tr>
            </table>
          </fieldset>
        </div>
      </div>
      <div class="span6">
        <div>
          <fieldset>
            <legend>Обо мне</legend>
            <table>
              <tr><td>Режим дня</td><td>сова</td></tr>
              <tr><td>Отношения</td><td>свободна</td></tr>
              <tr><td>Дети</td><td>когда-нибудь</td></tr>
              <tr><td>Иностранные языки</td><td>английский</td></tr>
              <tr><td>Курение</td><td>не курю</td></tr>
              <tr><td>Алкоголь</td><td>не пью</td></tr>
              <tr><td colspan="2"><a>Развернуть</a></td></tr>
            </table>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div>
          <fieldset>
            <legend>Интересы</legend>
            <ul>
              <li>Спорт</li>
              <li>Музыка</li>
              <li>Кино</li>
              <li>Танцы</li>
            </ul>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
  <div class="span4">
     ФОТКИ
  </div>
</div>