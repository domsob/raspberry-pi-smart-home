      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Licht</h3>
            </div>
            <div class="panel-body">
              <div class="btn-group-vertical btn-group full-width" role="group">
                <button type="button" class="btn btn-default" data-light="2" id="toggleCorridorBtn">Flur</button>
                <button type="button" class="btn btn-default" data-light="1" id="toggleLoungeBtn">Wohnzimmer</button>
              </div> 
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Wecker</h3>
            </div>
            <div class="panel-body">
		<select name="alarmTime" class="full-width select-style">
                  <option>Weckzeit</option>
                  <?php
                    $hour = 0;
                    while($hour < 24) {
                        echo '<option>'.$hour.':00</option>';
                        echo '<option>'.$hour.':15</option>';
                        echo '<option>'.$hour.':30</option>';
                        echo '<option>'.$hour.':45</option>';
                        $hour = $hour + 1;
                    }
                  ?>
                </select>
		<select name="modus" class="full-width select-style">
                  <option>Modus</option>
                  <option>Alarmsignal</option>
                  <option>Licht</option>
                  <option>Alarmsignal &amp; Licht</option>
                </select>
		<div class="btn-group top-divider" data-toggle="buttons">
		  <label class="btn btn-default active">
		    <input type="radio" name="options" id="alarmNotActive" autocomplete="off" checked> Deaktiviert
		  </label>
		  <label class="btn btn-default">
		    <input type="radio" name="options" id="alarmActive" autocomplete="off"> Aktiviert
		  </label>
		</div>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Sensoren</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
	        <tr>
	            <td>Innentemperatur</td>
	            <td>-</td>
	        </tr>
	        <tr>
	            <td>Außentemperatur</td>
	            <td>-</td>
	        </tr>
	        <tr>
	            <td>Helligkeit</td>
	            <td>-</td>
	        </tr>
    	       </table>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>