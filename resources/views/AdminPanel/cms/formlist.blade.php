@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>CMS</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">CMS</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <div id="alert"
                 class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <form action="{{ route('save_cms') }}" method="POST" enctype="multipart/form-data">
                        <nav class="card-header fs-5">
                            {{-- <h4 class="">Edit Site Settings</h4> --}}
                            <div class="d-flex">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Home
                                    </button>
                                    <button class="nav-link" id="nav-us-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-us" type="button" role="tab"
                                            aria-controls="nav-us"
                                            aria-selected="false">US
                                    </button>
                                    <button class="nav-link" id="nav-australia-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-australia" type="button" role="tab"
                                            aria-controls="nav-australia"
                                            aria-selected="false">Australia
                                    </button>
                                    <button class="nav-link" id="nav-canada-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-canada" type="button" role="tab"
                                            aria-controls="nav-canada"
                                            aria-selected="false">Canada
                                    </button>
                                    <button class="nav-link" id="nav-korea-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-korea" type="button" role="tab"
                                            aria-controls="nav-korea"
                                            aria-selected="false">Korea
                                    </button>

                                    <button class="nav-link" id="nav-uae-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-uae" type="button" role="tab"
                                            aria-controls="nav-uae"
                                            aria-selected="false">UAE
                                    </button>
                                    <button class="nav-link" id="nz-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-nz" type="button" role="tab"
                                            aria-controls="nav-nz"
                                            aria-selected="false"> New Zealand
                                    </button>
                                    <button class="nav-link" id="europe-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-europe" type="button" role="tab"
                                            aria-controls="nav-europe"
                                            aria-selected="false"> Europe
                                    </button>

                                    <button class="nav-link" id="nav-japan-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-japan" type="button" role="tab"
                                            aria-controls="nav-japan"
                                            aria-selected="false"> Japan
                                    </button>
                                    <button class="nav-link" id="counselling-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-counselling" type="button" role="tab"
                                            aria-controls="nav-counselling"
                                            aria-selected="false"> Counselling
                                    </button>
                                    <button class="nav-link" id="preparation-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-preparation" type="button" role="tab"
                                            aria-controls="nav-preparation"
                                            aria-selected="false"> Test Preparation
                                    </button>
                                    <button class="nav-link" id="selection-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-selection" type="button" role="tab"
                                            aria-controls="nav-selection"
                                            aria-selected="false"> University Selection
                                    </button>


                                    <button class="nav-link" id="processing-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-processing" type="button" role="tab"
                                            aria-controls="nav-processing"
                                            aria-selected="false"> Visa Processing
                                    </button>

                                    <button class="nav-link" id="selection-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-language" type="button" role="tab"
                                            aria-controls="nav-language"
                                            aria-selected="false"> Language Services
                                    </button>
                                    <button class="nav-link" id="nav-financial-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-financial" type="button" role="tab"
                                            aria-controls="nav-financial"
                                            aria-selected="false"> Financial Services
                                    </button>

                                </div>
                                @if (session()->get('AdminUser')['type'] == 'R')
                                    <div class="ms-auto">
                                        <button class="btn btn-success h-100" type="submit">Update</button>
                                    </div>
                                @endif
                            </div>
                        </nav>
                        <div class="card-body">
                            @csrf
                            <div class="tab-content" id="nav-tabContent">
                                {{--Home--}}
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="home_header1"
                                                   value="{{ $cms['home_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="home_content1" id="home_content1"
                                                      class="ckeditor">{{ $cms['home_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('home_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="home_header2"
                                                   value="{{ $cms['home_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="home_content2" id="home_content2"
                                                      class="ckeditor">{{ $cms['home_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('home_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="home_header3"
                                                   value="{{ $cms['home_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="home_content3" id="home_content3"
                                                      class="ckeditor">{{ $cms['home_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('home_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="home_header4"
                                                   value="{{ $cms['home_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="home_content4" id="home_content4"
                                                      class="ckeditor">{{ $cms['home_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('home_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="home_header5"
                                                   value="{{ $cms['home_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="home_content5" id="home_content5"
                                                      class="ckeditor">{{ $cms['home_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('home_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image1</label>
                                            <input type="file" class="form-control" name="home_image1">
                                            <div class="text-danger">
                                                @error('home_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['home_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="home_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['home_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['home_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image2</label>
                                            <input type="file" class="form-control" name="home_image2">
                                            <div class="text-danger">
                                                @error('home_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['home_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="home_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['home_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['home_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="home_content" id="home_content"
                                                      class="ckeditor">{{ $cms['home_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="nav-us" role="tabpanel"
                                     aria-labelledby="nav-us-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="us_header1"
                                                   value="{{ $cms['us_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('us_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="us_content1" id="us_content1"
                                                      class="ckeditor">{{ $cms['us_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('us_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="us_header2"
                                                   value="{{ $cms['us_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('us_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="us_content2" id="us_content2"
                                                      class="ckeditor">{{ $cms['us_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('us_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="us_header3"
                                                   value="{{ $cms['us_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('us_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="us_content3" id="us_content3"
                                                      class="ckeditor">{{ $cms['us_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('us_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="us_header4"
                                                   value="{{ $cms['us_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('us_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="us_content4" id="us_content4"
                                                      class="ckeditor">{{ $cms['us_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('us_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="us_header5"
                                                   value="{{ $cms['us_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('us_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="us_content5" id="us_content5"
                                                      class="ckeditor">{{ $cms['us_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('us_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="usa1">
                                            <div class="text-danger">
                                                @error('usa1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['usa1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="usa1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['usa1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['usa1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="usa2">
                                            <div class="text-danger">
                                                @error('usa2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['usa2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="usa2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['usa2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['usa2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="tab-pane fade " id="nav-australia" role="tabpanel"
                                     aria-labelledby="nav-australia-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="australia_header1"
                                                   value="{{ $cms['australia_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('australia_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="australia_content1" id="australia_content1"
                                                      class="ckeditor">{{ $cms['australia_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('australia_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="australia_header2"
                                                   value="{{ $cms['australia_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('australia_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="australia_content2" id="australia_content2"
                                                      class="ckeditor">{{ $cms['australia_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('australia_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="australia_header3"
                                                   value="{{ $cms['australia_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('australia_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="australia_content3" id="australia_content3"
                                                      class="ckeditor">{{ $cms['australia_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('australia_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="australia_header4"
                                                   value="{{ $cms['australia_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('australia_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="australia_content4" id="australia_content4"
                                                      class="ckeditor">{{ $cms['australia_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('australia_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="australia_header5"
                                                   value="{{ $cms['australia_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('australia_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="australia_content5" id="australia_content5"
                                                      class="ckeditor">{{ $cms['australia_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('australia_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="australia1">
                                            <div class="text-danger">
                                                @error('australia1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['australia1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="australia1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['australia1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['australia1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="australia2">
                                            <div class="text-danger">
                                                @error('australia2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['australia2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="australia2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['australia2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['australia2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="tab-pane fade " id="nav-canada" role="tabpanel"
                                     aria-labelledby="nav-canada-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="canada_header1"
                                                   value="{{ $cms['canada_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('canada_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="canada_content1" id="canada_content1"
                                                      class="ckeditor">{{ $cms['canada_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('canada_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="canada_header2"
                                                   value="{{ $cms['canada_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('canada_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="canada_content2" id="canada_content2"
                                                      class="ckeditor">{{ $cms['canada_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('canada_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="canada_header3"
                                                   value="{{ $cms['canada_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('canada_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="canada_content3" id="canada_content3"
                                                      class="ckeditor">{{ $cms['canada_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('canada_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="canada_header4"
                                                   value="{{ $cms['canada_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('canada_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="canada_content4" id="canada_content4"
                                                      class="ckeditor">{{ $cms['canada_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('canada_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="canada_header5"
                                                   value="{{ $cms['canada_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('canada_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="canada_content5" id="canada_content5"
                                                      class="ckeditor">{{ $cms['canada_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('canada_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="canada1">
                                            <div class="text-danger">
                                                @error('canada1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['canada1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="canada1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['canada1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['canada1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="canada2">
                                            <div class="text-danger">
                                                @error('canada2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['canada2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="canada2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['canada2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['canada2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>



                                <div class="tab-pane fade " id="nav-korea" role="tabpanel"
                                     aria-labelledby="nav-korea-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="korea_header1"
                                                   value="{{ $cms['korea_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('korea_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="korea_content1" id="korea_content1"
                                                      class="ckeditor">{{ $cms['korea_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('korea_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="korea_header2"
                                                   value="{{ $cms['korea_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('korea_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="korea_content2" id="korea_content2"
                                                      class="ckeditor">{{ $cms['korea_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('korea_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="korea_header3"
                                                   value="{{ $cms['korea_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('korea_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="korea_content3" id="korea_content3"
                                                      class="ckeditor">{{ $cms['korea_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('korea_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="korea_header4"
                                                   value="{{ $cms['korea_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('korea_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="korea_content4" id="korea_content4"
                                                      class="ckeditor">{{ $cms['korea_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('korea_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="korea_header5"
                                                   value="{{ $cms['korea_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('korea_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="korea_content5" id="korea_content5"
                                                      class="ckeditor">{{ $cms['korea_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('korea_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="korea_content6" id="korea_content6"
                                                      class="ckeditor">{{ $cms['korea_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('korea_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="korea_content7" id="korea_content7"
                                                      class="ckeditor">{{ $cms['korea_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('korea_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="korea1">
                                            <div class="text-danger">
                                                @error('korea1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['korea1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="korea1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['korea1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['korea1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="korea2">
                                            <div class="text-danger">
                                                @error('korea2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['korea2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="korea2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['korea2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['korea2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-uae" role="tabpanel"
                                     aria-labelledby="nav-uae-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="uae_header1"
                                                   value="{{ $cms['uae_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('uae_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="uae_content1" id="uae_content1"
                                                      class="ckeditor">{{ $cms['uae_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('uae_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="uae_header2"
                                                   value="{{ $cms['uae_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('uae_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="uae_content2" id="uae_content2"
                                                      class="ckeditor">{{ $cms['uae_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('uae_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="uae_header3"
                                                   value="{{ $cms['uae_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('uae_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="uae_content3" id="uae_content3"
                                                      class="ckeditor">{{ $cms['uae_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('uae_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="uae_header4"
                                                   value="{{ $cms['uae_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('uae_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="uae_content4" id="uae_content4"
                                                      class="ckeditor">{{ $cms['uae_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('uae_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="uae1">
                                            <div class="text-danger">
                                                @error('uae1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['uae1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="uae1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['uae1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['uae1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="uae2">
                                            <div class="text-danger">
                                                @error('uae2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['uae2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="uae2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['uae2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['uae2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 3</label>
                                            <input type="file" class="form-control" name="uae3">
                                            <div class="text-danger">
                                                @error('uae3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['uae3']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="uae3"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['uae3']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['uae3']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-japan" role="tabpanel"
                                     aria-labelledby="nav-japan-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="japan_header1"
                                                   value="{{ $cms['japan_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="japan_content1" id="japan_content1"
                                                      class="ckeditor">{{ $cms['japan_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('japan_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="japan_header2"
                                                   value="{{ $cms['japan_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="japan_content2" id="japan_content2"
                                                      class="ckeditor">{{ $cms['japan_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('japan_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="japan_header3"
                                                   value="{{ $cms['japan_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="japan_content3" id="japan_content3"
                                                      class="ckeditor">{{ $cms['japan_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('japan_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="japan_header4"
                                                   value="{{ $cms['japan_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="japan_content4" id="japan_content4"
                                                      class="ckeditor">{{ $cms['japan_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('japan_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="japan_header5"
                                                   value="{{ $cms['japan_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="japan_content5" id="japan_content5"
                                                      class="ckeditor">{{ $cms['japan_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('japan_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="japan_header6"
                                                   value="{{ $cms['japan_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="japan_content6" id="japan_content6"
                                                      class="ckeditor">{{ $cms['japan_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('japan_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="japan_header7"
                                                   value="{{ $cms['japan_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="japan_content7" id="japan_content7"
                                                      class="ckeditor">{{ $cms['japan_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('japan_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="japan_header8"
                                                   value="{{ $cms['japan_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('japan_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 8</label>
                                            <textarea name="japan_content8" id="japan_content8"
                                                      class="ckeditor">{{ $cms['japan_content8'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('japan_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>




                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="japan1">
                                            <div class="text-danger">
                                                @error('japan1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['japan1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="japan1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['japan1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['japan1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="us2">
                                            <div class="text-danger">
                                                @error('us2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['japan2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="japan2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['japan2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['japan2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-financial" role="tabpanel"
                                     aria-labelledby="nav-financial-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="financial_header1"
                                                   value="{{ $cms['financial_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="financial_content1" id="financial_content1"
                                                      class="ckeditor">{{ $cms['financial_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('financial_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="financial_header2"
                                                   value="{{ $cms['financial_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="financial_content2" id="financial_content2"
                                                      class="ckeditor">{{ $cms['financial_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="financial_header3"
                                                   value="{{ $cms['financial_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="financial_content3" id="financial_content3"
                                                      class="ckeditor">{{ $cms['financial_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('financial_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="financial_header4"
                                                   value="{{ $cms['financial_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="financial_content4" id="financial_content4"
                                                      class="ckeditor">{{ $cms['financial_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="financial_header5"
                                                   value="{{ $cms['financial_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="financial_content5" id="financial_content5"
                                                      class="ckeditor">{{ $cms['financial_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="financial_header6"
                                                   value="{{ $cms['financial_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="financial_content6" id="financial_content6"
                                                      class="ckeditor">{{ $cms['financial_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="financial_header7"
                                                   value="{{ $cms['financial_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="financial_content7" id="financial_content7"
                                                      class="ckeditor">{{ $cms['financial_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="financial_header8"
                                                   value="{{ $cms['financial_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 8</label>
                                            <textarea name="financial_content8" id="financial_content8"
                                                      class="ckeditor">{{ $cms['financial_content8'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>




                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="financial1">
                                            <div class="text-danger">
                                                @error('financial1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['financial1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="financial1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['financial1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['financial1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="us2">
                                            <div class="text-danger">
                                                @error('us2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['financial2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="financial2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['financial2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['financial2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>



                                <div class="tab-pane fade " id="nav-counselling" role="tabpanel"
                                     aria-labelledby="nav-counselling-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="counselling_header1"
                                                   value="{{ $cms['counselling_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('counselling_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="counselling_content1" id="counselling_content1"
                                                      class="ckeditor">{{ $cms['counselling_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('counselling_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="counselling1">
                                            <div class="text-danger">
                                                @error('counselling1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['counselling1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="counselling1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['counselling1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['counselling1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-preparation" role="tabpanel"
                                     aria-labelledby="nav-preparation-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="preparation_header1"
                                                   value="{{ $cms['preparation_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('preparation_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="preparation_content1" id="preparation_content1"
                                                      class="ckeditor">{{ $cms['preparation_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('preparation_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="preparation1">
                                            <div class="text-danger">
                                                @error('preparation1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['preparation1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="preparation1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['preparation1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['preparation1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-selection" role="tabpanel"
                                     aria-labelledby="nav-selection-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="selection_header1"
                                                   value="{{ $cms['selection_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('selection_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="selection_content1" id="selection_content1"
                                                      class="ckeditor">{{ $cms['selection_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('selection_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="selection1">
                                            <div class="text-danger">
                                                @error('selection1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['selection1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="selection1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['selection1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['selection1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-processing" role="tabpanel"
                                     aria-labelledby="nav-processing-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="processing_header1"
                                                   value="{{ $cms['processing_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('processing_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="processing_content1" id="processing_content1"
                                                      class="ckeditor">{{ $cms['processing_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('processing_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="processing1">
                                            <div class="text-danger">
                                                @error('processing1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['processing1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="processing1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['processing1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['processing1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-language" role="tabpanel"
                                     aria-labelledby="nav-language-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="language_header1"
                                                   value="{{ $cms['language_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('language_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="language_content1" id="language_content1"
                                                      class="ckeditor">{{ $cms['language_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('language_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="language1">
                                            <div class="text-danger">
                                                @error('language1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['language1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="language1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['language1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['language1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="language1">
                                            <div class="text-danger">
                                                @error('language2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['language1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="language2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['language2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['language2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>




                                <div class="tab-pane fade " id="nav-nz" role="tabpanel"
                                     aria-labelledby="nav-nz-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="nz_header1"
                                                   value="{{ $cms['nz_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('nz_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="nz_content1" id="nz_content1"
                                                      class="ckeditor">{{ $cms['nz_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('nz_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="nz_header2"
                                                   value="{{ $cms['nz_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('nz_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="nz_content2" id="nz_content2"
                                                      class="ckeditor">{{ $cms['nz_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('nz_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="nz_header3"
                                                   value="{{ $cms['nz_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('nz_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>

                                            <textarea name="nz_content3" id="nz_content3"
                                                      class="ckeditor">{{ $cms['nz_content3'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('nz_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="nz1">
                                            <div class="text-danger">
                                                @error('nz1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['nz1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="nz1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['nz1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['nz1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="nz2">
                                            <div class="text-danger">
                                                @error('nz2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['nz2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="nz2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['nz2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['nz2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-europe" role="tabpanel"
                                     aria-labelledby="nav-europe-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="europe_header1"
                                                   value="{{ $cms['europe_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('europe_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="europe_content1" id="europe_content1"
                                                      class="ckeditor">{{ $cms['europe_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('europe_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="europe_header2"
                                                   value="{{ $cms['europe_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('europe_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="europe_content2" id="europe_content2"
                                                      class="ckeditor">{{ $cms['europe_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('europe_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="europe_header3"
                                                   value="{{ $cms['europe_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('europe_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>

                                            <textarea name="europe_content3" id="europe_content3"
                                                      class="ckeditor">{{ $cms['europe_content3'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('europe_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        </div>

                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="europe1">
                                            <div class="text-danger">
                                                @error('europe1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['europe1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="europe1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['europe1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['europe1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="europe2">
                                            <div class="text-danger">
                                                @error('europe2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['europe2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="europe2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['europe2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['europe2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.alert').fadeOut(3000);

            Fancybox.bind("gallery", {});
            // var ckeditor = new CKEDITOR
            $(window).on('load', function () {
                $('.ckeditor').ckeditor();
            });
            // CKEDITOR.replaceAll('ckeditor');

            $(document).on('click', '.ajaxDelete', function (e) {
                e.preventDefault();
                var _this = $(this);
                var name = $(this).attr('data-name');
                var key = $(this).attr('data-key');
                var csrf = "{{ csrf_token() }}";

                if (confirm('Are you sure to delete current ' + name + ' ?')) {
                    data = {
                        key: key,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('cmsajaxDelete') }}",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                // $(_this).parent('div').attr('hidden', 'true');
                                $(_this).parent('div').html('');
                                $('#alert').addClass('alert alert-danger')
                                    .removeClass('m-0 border-0 p-0').html('Image Deleted...');
                                $('.alert').fadeOut(3000);
                            }
                        }
                    });
                }
                // console.log(key, name);
            });

            var $textareas = $('textarea');
            $textareas.each(function() { // to avoid the shrinking
                this.style.minHeight = this.offsetHeight + 'px';
            });

            $textareas.on('input', function() {
                this.style.height = '';
                this.style.height = this.scrollHeight + 'px';
            });
        });
    </script>
@endsection

