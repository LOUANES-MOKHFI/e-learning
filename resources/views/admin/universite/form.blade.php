
                        <div class="form-group row">
                            <label for="nom_universite" class="col-md-4 col-form-label text-md-right">{{ __("Nom de l'universite") }}</label>

                            <div class="col-md-6">
                            <input id="nom_universite" type="text" class="form-control @error('nom_universite') is-invalid @enderror" name="nom_universite" value="{{ old('nom_universite') }}" required autocomplete="nom_universite" autofocus placeholder="Nom de l'universite" >

                                @error('nom_universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wilaya_universite" class="col-md-4 col-form-label text-md-right">{{ __('Wilaya') }}</label>

                            <div class="col-md-6">
                               <input id="wilaya_universite" type="text" class="form-control @error('wilaya_universite') is-invalid @enderror" name="wilaya_universite" value="{{ old('wilaya_universite') }}" required autocomplete="wilaya_universite" autofocus placeholder="Wilaya" >
                                @error('wilaya_universite')
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
