                        <div class="form-group row">
                            <label for="nom_module" class="col-md-4 col-form-label text-md-right">{{ __('Nom de module') }}</label>

                            <div class="col-md-6">
                            <input id="nom_module" type="text" class="form-control @error('nom_module') is-invalid @enderror" name="nom_module" required autocomplete="nom_module" autofocus placeholder="Nom de module" >

                                @error('nom_module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filier" class="col-md-4 col-form-label text-md-right">{{ __('Filier') }}</label>

                            <div class="col-md-6">
                               <input id="filier" type="text" class="form-control @error('filier') is-invalid @enderror" name="filier" required autocomplete="filier" autofocus placeholder="exemple: MI,snv..." >

                                @error('filier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="num_semstr" class="col-md-4 col-form-label text-md-right">{{ __('Semestre') }}</label>

                            <div class="col-md-6">
                                 {!! Form::select("num_semstr", ['1'=> 'impaire', '2'=>'paire'], null ,['class'=>'form-control'])!!}
                                @error('num_semstr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coeff" class="col-md-4 col-form-label text-md-right">{{ __('Coeffesion') }}</label>

                            <div class="col-md-6">
                           <input id="coeff" type="text" class="form-control @error('coeff') is-invalid @enderror" name="coeff" required autocomplete="coeff" autofocus placeholder="Coeffesion" >
                                @error('coeff')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <div class="form-group row">
                            <div class="col-md-6">
                           <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" required autocomplete="id" autofocus placeholder="Coeffesion" value="{{ $filiers->id}}" >
                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                    
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
