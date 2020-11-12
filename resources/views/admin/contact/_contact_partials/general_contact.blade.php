<div class="card">
    <div class="card-header">
        {{ trans('cruds.contact.title_singular') }} {{ trans('cruds.contact.info') }}
    </div>

    <div class="card-body">
        <div class="container-fluid">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('contact_phone') ? 'has-error' : '' }}">
                            <label for="contact_phone">{{ trans('cruds.contact.fields.phone') }}*</label>
                            <input type="text" id="contact_phone" name="contact_phone" class="form-control" value="{{ old('contact_phone', isset($contact) ? $contact->phone : '') }}" required>
                            @if($errors->has('contact_phone'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('contact_phone') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contact.fields.contact_phone_helper') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('contact_fax') ? 'has-error' : '' }}">
                            <label for="contact_fax">{{ trans('cruds.contact.fields.fax') }}*</label>
                            <input type="text" id="contact_fax" name="contact_fax" class="form-control" value="{{ old('contact_fax', isset($contact) ? $contact->fax : '') }}" required>
                            @if($errors->has('contact_fax'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('contact_fax') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contact.fields.contact_fax_helper') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('contact_mobile') ? 'has-error' : '' }}">
                            <label for="contact_mobile">{{ trans('cruds.contact.fields.mobile') }}*</label>
                            <input type="text" id="contact_mobile" name="contact_mobile" class="form-control" value="{{ old('contact_mobile', isset($contact) ? $contact->mobile : '') }}" required>
                            @if($errors->has('contact_mobile'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('contact_mobile') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contact.fields.contact_mobile_helper') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('contact_mobile_optional1') ? 'has-error' : '' }}">
                            <label for="contact_mobile_optional1">{{ trans('cruds.contact.fields.contact_mobile_optional1') }}</label>
                            <input type="text" id="contact_mobile_optional1" name="contact_mobile_optional1" class="form-control" value="{{ old('contact_mobile_optional1', isset($contact) ? $contact->mobile_optional1 : '') }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('contact_mobile_optional2') ? 'has-error' : '' }}">
                            <label for="contact_mobile_optional2">{{ trans('cruds.contact.fields.contact_mobile_optional2') }}</label>
                            <input type="text" id="contact_mobile_optional2" name="contact_mobile_optional2" class="form-control" value="{{ old('contact_mobile_optional2', isset($contact) ? $contact->mobile_optional2 : '') }}">
                        </div>
                    </div>
                    
                </div>




                <div class="row">
                <div class="col-md-6">
                        <div class="form-group {{ $errors->has('contact_address') ? 'has-error' : '' }}">
                            <label for="contact_address">{{ trans('cruds.contact.fields.address') }}*</label>
                            <textarea 
                                id="contact_address" 
                                name="contact_address" 
                                class="form-control" 
                                rows="4"
                                required>{{ old('contact_address', isset($contact) ? $contact->address : '') }}</textarea>
                            @if($errors->has('contact_address'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('contact_address') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contact.fields.contact_address_helper') }}
                            </p>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('contact_address') ? 'has-error' : '' }}">
                            <label for="contact_address">{{ trans('cruds.contact.fields.address') }} {{ trans('cruds.contact.fields.arabic') }}*</label>
                            <textarea 
                                id="contact_address_arabic" 
                                name="contact_address_arabic" 
                                class="form-control rtl pull-right" 
                                rows="4"
                                required>{{ old('contact_address', isset($contact) ? $contact->address_arabic : '') }}</textarea>
                            @if($errors->has('contact_address'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('contact_address') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contact.fields.contact_address_helper') }}
                            </p>
                        </div>
                    </div>
                </div>

          
        </div>
    </div>
</div>