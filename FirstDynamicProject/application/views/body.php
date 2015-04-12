
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="panel panel-success">
                <div class="panel-heading">Panel heading without title</div>
                 <div class="panel-body fixed-panel">
                     <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-success">
                <div class="panel-heading">Panel heading without title</div>
                 <div class="panel-body fixed-panel">
                     <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-success">
                <div class="panel-heading">Panel heading without title</div>
                 <div class="panel-body fixed-panel">
                     <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     </p>
                </div>
              </div>
            </div>
        </div>
    </div>
     <!-- Button trigger modal -->
    <div class="container">

             
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">
                Add User <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Add User</h4>
                    </div>
                    <div class="modal-body">
                      <form action="add" method="post">
                        <div class="form-group">
                          <label for="exampleInputName2">First Header</label>
                          <input type="text" class="form-control" name="first_header" placeholder="first header">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName2">Second Header</label>
                          <input type="text" class="form-control" name="second_header" placeholder="second header">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName2">Third Header</label>
                          <input type="text" class="form-control" name="third_header" placeholder="third header">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName2">Fourth Header</label>
                          <input type="text" class="form-control" name="fourth_header" placeholder="fourth header">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                    
                    </div>
                  </div>
                </div>
              </div>
      <div class="table-responsive">
            <table class="table table-striped">
             <thead>
              <tr class="success">
               <th>First Header</th>
               <th>Second header</th>
               <th>Third Header</th>
               <th>Fourth Header</th>
              </tr>
            </thead>
            <tbody>
              <?php  
               foreach($result as $row)
                    {
                        echo '<tr><td>'.$row->first_header.'</td>';
                        echo '<td>'.$row->second_header.'</td>';
                        echo '<td>'.$row->third_header.'</td>';
                        echo '<td>'.$row->fourth_header.'</td></tr>';
                       
                    } ?>
              
            </tbody>
            </table>
      </div>
    </div>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
            
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item active">
                <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
          
    <div class="container">
      <div class="row">

            <ul class="media-list">
              <div class="col-md-6">
                      <li class="media">
                            <a href="#" class="media-left media-middle">
                              <img src="holder.js/100x100" alt="media object">
                            </a>
                      
                           <div class="media-body">
                              <h4 class="media-heading">Media Header</h4>
                              <p>the description of the media object.the description of the media object
                              the description of the media object.the description of the media object
                              the description of the media object.the description of the media object.
                              the description of the media object.
                              the description of the media object.the description of the media object</p>
                           </div>
                      </li>
              </div>
              <div class="col-md-6">
                      <li class="media">
                            <a href="#" class="media-left media-middle" alt="media object">
                              <img src="holder.js/100x100" alt="media object">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Media Header</h4>
                              <p>the description of the media object.the description of the media object.
                              the description of the media object.the description of the media object.the description of the media object.the description of the media object.the description of the media object</p>
                            </div>
                      </li>
              </div>
              <div class="col-md-12">
                      <li class="media">
                            <a href="#" class="media-left media-middle" >
                              <img src="holder.js/100x100" alt="media object">
                              </a>
                            <div class="media-body">
                              <h4 class="media-heading">Media Header</h4>
                              <p>the description of the media object.the description of the media object.
                              the description of the media object.the description of the media object.the description of the media object
                              the description of the media object.the description of the media object</p>
                            </div>
                      </li>
              </div>     
            </div>
            </ul>
    </div>
    </div>
    <!-- THUMBNAIL-->
      <div class="container">
       <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img data-src="holder.js/100%x180" alt="100%x180" src="" data-holder-rendered="true">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>thumbnail description.thumbnail description.thumbnail description </p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="thumbnail">
            <img src="holder.js/100%x200" alt="thumbnail 1"data-holder-rendered="true">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>thumbnail description.thumbnail description.thumbnail description </p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="thumbnail">
            <img src="holder.js/100%x200" alt="thumbnail 1" data-holder-rendered="true">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>thumbnail description.thumbnail description.thumbnail description </p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
      </div>
     </div>
     <!-- COLLAPSIBLE ITEM-->
              <div class="container">

                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-success">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                            Collapsible Group Item #1
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-danger">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                </div>
                <div class="container">
                  <div class="well well-lg">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
          <!--GOOGLE MAP INTEGRATION-->
            
            
                 
              <div class="thumbnail">
                <div class="container">
                  <div class="row">
                       <div class="col-md-4 ">
                        
                           <object class="embed-responsive-item">
                             
                                <iframe src=""></iframe>
                             
                           </object>
                        
                      </div>
                       <div class="col-md-4 ">
                        
                           <object class="embed-responsive-item">
                             
                                <iframe src=""></iframe>
                            
                           </object>
                        
                      </div>
                       <div class="col-md-4 ">
                        
                           <object class="embed-responsive-item">
                             
                               <iframe src=""></iframe>
                             
                           </object>
                        
                      </div>
                  </div>    
                </div>      
              </div>
                   
 

