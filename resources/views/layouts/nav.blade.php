 
  {!! Form::open(['url'=>'showfiliers1', 'method'=>'get'])!!}
              
          <div class="col-xs-12">
               
    <br>
 
            <div class="box-header with-border">
              <h3 class="box-title">vos information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body col-xs-12 col-lg-12 col-md-12">
                <div class="form-group col-xs-3">
                  <label for="exampleInputEmail1">Université</label>
                
                  <select class="form-control" name="nom_universite" id="nom_universite">
                      <option value="0">--Universite--</option>
                     @foreach(universite() as $universite) 
                     <option value="{{ $universite->id}}">{{ $universite->nom_universite }}</option>
                     @endforeach     
                  </select>
                </div>
                <div class="form-group col-xs-3 col-md-3">
                <label for="exampleInputPassword1">Faculté</label>
                   <select class="form-control" name="faculte_nom" id="faculte_nom">
                     <option value="0">--Faculte--</option>
                   </select>            
                </div>
                 <div class="form-group col-xs-3">
                  <label for="exampleInputPassword1">Spécialite</label>
                <select class="form-control" name="nom_filier" id="nom_filier">
                  <option value="0">--Specialite--</option>
                 
                </select>
                </div>
                <div class="form-group col-xs-3">
                <label for="exampleInputPassword1">Niveau</label>
                   <select class="form-control" name="niveau" id="niveau">
                     <option value="0">--Niveau--</option>    
                   </select>            
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success"> {{ __('Submit') }}</button>
           </div>
          </div>
            {!! Form::close() !!}