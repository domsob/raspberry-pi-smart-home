<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Flur</h3>
      </div>
      <div class="panel-body">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default set-light" data-light="2" data-on="false" data-sat="200" data-bri="150" data-hue="13524">Ausschalten</button>
        </div><br />
        <div class="btn-group top-divider" role="group">
          <button type="button" class="btn btn-default set-light" data-light="2" data-on="true" data-sat="200" data-bri="150" data-hue="13524">Standard</button>
          <button type="button" class="btn btn-default set-light" data-light="2" data-on="true" data-sat="200" data-bri="90" data-hue="13524">Gedimmt</button>
          <button type="button" class="btn btn-default set-light" data-light="2" data-on="true" data-sat="53" data-bri="254" data-hue="33016">Konzentration</button>
        </div>
      </div>
    </div>
  </div><!-- /.col-sm-12 -->
  <div class="col-sm-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Wohnzimmer</h3>
      </div>
      <div class="panel-body">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default set-light" data-light="1" data-on="false" data-sat="200" data-bri="150" data-hue="13524">Ausschalten</button>
        </div><br />
        <div class="btn-group top-divider" role="group">
          <button type="button" class="btn btn-default set-light" data-light="1" data-on="true" data-sat="200" data-bri="150" data-hue="13524">Standard</button>
          <button type="button" class="btn btn-default set-light" data-light="1" data-on="true" data-sat="200" data-bri="90" data-hue="13524">Gedimmt</button>
          <button type="button" class="btn btn-default set-light" data-light="1" data-on="true" data-sat="53" data-bri="254" data-hue="33016">Konzentration</button>
        </div>
      </div>
    </div>
  </div><!-- /.col-sm-12 -->
  <div class="col-sm-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Effekte (Alternierend)</h3>
      </div>
      <div class="panel-body">
        <div class="input-group">
          <span class="input-group-addon">Durchläufe (1 - 25)</span>
          <input type="text" class="form-control" id="alternateLoops" value="10">
        </div>
        <div class="btn-group top-divider" role="group">
          <button type="button" class="btn btn-primary" data-hue="47100" id="alternateBlueBtn">Blaues Licht</button>
          <button type="button" class="btn btn-warning" data-hue="15740" id="alternateYellowBtn">Gelbes Licht</button>
          <button type="button" class="btn btn-danger" data-hue="0" id="alternateRedBtn">Rotes Licht</button>
        </div>
      </div>
    </div>
  </div><!-- /.col-sm-12 -->
  <div class="col-sm-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Effekte (Regenbogenfarben)</h3>
      </div>
      <div class="panel-body">
        <div class="input-group">
          <span class="input-group-addon">Helligkeit (0 - 254)</span>
          <input type="text" class="form-control" id="brightnessValueInput" value="254">
        </div>
        <div class="btn-group top-divider" role="group">
          <button type="button" class="btn btn-default" data-light="2" id="rainbowLightCorridorBtn">Flur starten</button>
          <button type="button" class="btn btn-default" data-light="1" id="rainbowLightLoungeBtn">Wohnzimmer starten</button>
        </div>
      </div>
    </div>
  </div><!-- /.col-sm-12 -->
</div>