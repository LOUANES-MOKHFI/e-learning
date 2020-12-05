                        <div class="form-group row">
                            <label for="nom_faculte" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la faculte') }}</label>

                            <div class="col-md-6">
                            <input id="nom_faculte" type="text" class="form-control @error('nom_faculte') is-invalid @enderror" name="nom_faculte" required autocomplete="nom_faculte" autofocus placeholder="Nom de la faculte" >

                                @error('nom_faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="universite_faculte" class="col-md-4 col-form-label text-md-right">{{ __('Universite') }}</label>

                            <div class="col-md-6">
                                <select name="universite_faculte" class="form-control">
                                    <option value="0">--Université--</option>
                                    @foreach(universite() as $univ)
                                    <option>{{ $univ->nom_universite }}</option>
                                    @endforeach
                                </select>
                                @error('universite_faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                              <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" required autocomplete="id" autofocus  value="{{ $universite->id}}" >
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
