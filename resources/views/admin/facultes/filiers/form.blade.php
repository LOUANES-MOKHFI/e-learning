                       <input id="id_faculte" type="hidden" class="form-control @error('id_faculte') is-invalid @enderror" name="id_faculte" value="{{ $faculte->id }}" required autocomplete="id_faculte" autofocus >
                        <div class="form-group row">
                            <label for="nom_filier" class="col-md-4 col-form-label text-md-right">{{ __('Nom de filiers') }}</label>

                            <div class="col-md-6">
                            <input id="nom_filier" type="text" class="form-control @error('nom_filier') is-invalid @enderror" name="nom_filier" value="{{ old('nom_filier') }}" required autocomplete="nom_filier" autofocus placeholder="Nom de filiers" >

                                @error('nom_filier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="faculte_nom" class="col-md-4 col-form-label text-md-right">{{ __('Faculte') }}</label>

                            <div class="col-md-6">
                                <select  name="faculte_nom" class="form-control">
                                  <option>--Faculte--</option>
                                @foreach(faculte() as $faculte)
                                  <option>{{ $faculte->nom_faculte }}</option>
                                @endforeach
                                </select>
                                @error('faculte_nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="niveau" class="col-md-4 col-form-label text-md-right">{{ __('Niveau') }}</label>

                            <div class="col-md-6">
                                <select  name="niveau" class="form-control">
                                    <option value="0">--Niveau--</option>
                                    <option>1er année licence</option>
                                    <option>2eme année licence</option>
                                    <option>3eme année licence</option>
                                    <option>1er année Master</option>
                                    <option>2eme année Master</option>
                                </select>
                                @error('niveau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filier_discription" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                             {!! Form::textarea("filier_discription", null ,['class'=>'form-control'])!!}

                                @error('filier_discription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status de la filier') }}</label>

                            <div class="col-md-6">
                             {!! Form::select("status",['1'=>'active' ,'0'=>'desactive'], null ,['class'=>'form-control'])!!}
                                @error('status')
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
