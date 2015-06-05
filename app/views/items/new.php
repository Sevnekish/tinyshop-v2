{% extends "admin_panel/_admin_panel.php" %}

{% block admin_panel_content %}
  <div class="col-lg-6 col-md-6 col-sm-6">

      <form name="additem" class="form-new-item" action="/additem" enctype="multipart/form-data" method="post">

        <label for="select1">Category:</label>
        <select class="form-control" id="select1" name="category">
          <option value="">-</option>
          {% if categories is defined %}
            {% for id, category in categories %}
              <option value="{{ id }}">{{ category }}</option>
            {% endfor %}
          {% endif %}
          
        </select>

        <label for="select2">Brand:</label>
        <select class="form-control" id="select2" name="brand">
          <option value="">-</option>
          {% if brands is defined %}
            {% for id, brand in brands %}
              <option value="{{ id }}">{{ brand }}</option>
            {% endfor %}
          {% endif %}
        </select>

        <label>Model</label>
          <input name="model" type="text" value="" class="form-control input-xlarge" autocomplete="off" required>

        <label>Characteristics</label>
          <textarea name="characteristics" value="" rows="3" class="form-control input-xlarge" required></textarea>


        <label>Description</label>
          <textarea name="description" value="h" rows="3" class="form-control input-xlarge" required></textarea>

        <label>Price</label>
          <input name="price" type="text" value="" class="form-control input-xlarge" autocomplete="off" required>

        <label>Instock</label>
          <input name="instock" type="text" value="" class="form-control input-xlarge" max="3" autocomplete="off" required>

        <label>Photo</label>
        <br>
          <div class="upload-file">
            <div class="input-group">
              <span class="input-group-btn">
                <span class="btn btn-primary btn-file">
                  Browse&hellip; <input type="file" name="file">
                </span>
              </span>
              <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
              *.jpg only! Will resize your image to square proportion + adding white background!
            </span>
          </div>

        <div>
          <button class="btn btn-lg btn-primary pull-right btn-adminbar" type="submit">Add product</button>
        </div>
      </form>

  </div>
{% endblock %}