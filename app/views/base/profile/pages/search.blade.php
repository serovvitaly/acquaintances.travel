<div class="searh-box">
<form id="uni-deskbar" action="">
  <div class="row-fluid">
    <div class="span3">
      Я 
      <select name="iam" style="width: 100px;">
        <option value="">---</option>
        <option value="2">парень</option>
        <option value="1">девушка</option>
      </select>
    </div>
    <div class="span3">
      Ищу 
      <select name="whom" style="width: 100px;">
        <option value="">---</option>
        <option value="2">парня</option>
        <option value="1">девушку</option>
      </select>
    </div>
    <div class="span3">
      Возраст, от <input name="age_from" type="text" style="width: 50px;">
    </div>
    <div class="span3">
      Возраст, до <input name="age_to" type="text" style="width: 50px;">
    </div>
  </div>
  
  <div class="row-fluid">
    <div class="span6">
      Цель знакомства
      <select name="purpose" style="width: 202px;">
        <option value="">---</option>
        <option value="1">Серьезные отношения</option>
        <option value="2">Дружба, общение</option>
        <option value="3">Совместный отдых</option>
        <option value="4">Совместное путешествие</option>
      </select>
    </div>
    <div class="span6">
      Город
      <select name="city" style="width: 202px;">
        <option value="">---</option>
        <option value="Москва">Москва</option>
      </select>
    </div>
  </div>
  
  <div class="row-fluid">
    <div class="span6">
      <a class="btn" onclick="doSearch(); return false;">Поиск</a>
    </div>
  </div>
</form>
</div>