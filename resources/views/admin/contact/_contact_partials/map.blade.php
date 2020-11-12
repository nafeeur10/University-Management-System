<div class="card">
    <div class="card-header">
        {{ trans('cruds.contact.title_singular') }} {{ trans('cruds.contact.map') }}
    </div>

    <div class="card-body">
        <div class="container-fluid">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('contact_map_image') ? 'has-error' : '' }}">
                            <label for="contact_map_image">{{ trans('cruds.contact.fields.contact_map_image') }}*</label>
                            <input 
                                type="file" 
                                id="contact_map_image" 
                                name="contact_map_image" 
                                class="form-control" 
                                accept="image/*" 
                                onchange="loadFile(event, 'address-map-image-show')"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="previous_image">{{ trans('cruds.contact.fields.previous_image_show') }}</label>
                        <img src="{{ asset('images/contact/' . $contact->map_image) }}" alt="Address Image" id="address-map-image-show" class="img-fluid d-block">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('contact_map_address') ? 'has-error' : '' }}">
                            <label for="contact_map_address">{{ trans('cruds.contact.fields.map_address') }}*</label>
                            <input type="text" id="contact_map_address" name="contact_map_address" class="form-control" value="{{ old('contact_map_address', isset($contact) ? $contact->map_address : '') }}" required>
                            @if($errors->has('contact_map_address'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('contact_map_address') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contact.fields.contact_map_address_helper') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('contact_map_qr_image') ? 'has-error' : '' }}">
                            <label for="contact_map_qr_image">{{ trans('cruds.contact.fields.contact_map_qr_image') }}*</label>
                            <input 
                                type="file" 
                                id="contact_map_qr_image" 
                                name="contact_map_qr_image" 
                                class="form-control" 
                                accept="image/*" 
                                onchange="loadFile(event, 'preview-qr-image')"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="address_qr_code">{{ trans('cruds.contact.fields.address_qr_code') }}</label>
                        <img src="{{ asset('images/contact/' . $contact->qr_image) }}" alt="Address QR Code Image" id="preview-qr-image" class="img-fluid d-block">
                    </div>
                    
                </div>
            
        </div>
    </div>
</div>