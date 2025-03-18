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
                                    <button class="nav-link" id="nav-aboutus-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-aboutus" type="button" role="tab"
                                            aria-controls="nav-aboutus"
                                            aria-selected="false">About Us
                                    </button>
                                    <button class="nav-link" id="nav-contactus-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-contactus" type="button" role="tab"
                                            aria-controls="nav-contactus"
                                            aria-selected="false">Contact Us
                                    </button>
                                    <button class="nav-link" id="nav-bookingtable-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-bookingtable" type="button" role="tab"
                                            aria-controls="nav-bookingtable"
                                            aria-selected="false">Booking Table
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
                                                     data-src="{{ asset('storage/cms/' . $cms['home_image1']) }}"
                                                      src="{{ asset('storage/cms/' . $cms['home_image1']) }}"
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
                                                     data-src="{{ asset('storage/cms/' . $cms['home_image2']) }}"
                                                     src="{{ asset('storage/cms/' . $cms['home_image2']) }}"
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



                                <div class="tab-pane fade " id="nav-aboutus" role="tabpanel"
                                     aria-labelledby="nav-aboutus-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="aboutus_header1"
                                                   value="{{ $cms['aboutus_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('aboutus_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="aboutus_content1" id="aboutus_content1"
                                                      class="ckeditor">{{ $cms['aboutus_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('aboutus_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="aboutus_header2"
                                                   value="{{ $cms['aboutus_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('aboutus_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="aboutus_content2" id="aboutus_content2"
                                                      class="ckeditor">{{ $cms['aboutus_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('aboutus_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="aboutus_header3"
                                                   value="{{ $cms['aboutus_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('aboutus_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="aboutus_content3" id="aboutus_content3"
                                                      class="ckeditor">{{ $cms['aboutus_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('aboutus_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="aboutus_header4"
                                                   value="{{ $cms['aboutus_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('aboutus_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="aboutus_content4" id="aboutus_content4"
                                                      class="ckeditor">{{ $cms['aboutus_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('aboutus_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="aboutus_header5"
                                                   value="{{ $cms['aboutus_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('aboutus_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="aboutus_content5" id="aboutus_content5"
                                                      class="ckeditor">{{ $cms['aboutus_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('aboutus_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="aboutus_image1">
                                            <div class="text-danger">
                                                @error('aboutus_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['aboutus_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="aboutus_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/storage/cms/' . $cms['aboutus_image1']) }}"
                                                     src="{{ asset('/storage/cms/' . $cms['aboutus_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="aboutus_image2">
                                            <div class="text-danger">
                                                @error('aboutus_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['aboutus_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="aboutus_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/storage/cms/' . $cms['aboutus_image2']) }}"
                                                     src="{{ asset('/storage/cms/' . $cms['aboutus_image2']) }}"
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
                                     aria-labelledby="nav-contactus-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="contactus_header1"
                                                   value="{{ $cms['contactus_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('contactus_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="contactus_content1" id="contactus_content1"
                                                      class="ckeditor">{{ $cms['contactus_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('contactus_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="contactus_header2"
                                                   value="{{ $cms['contactus_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('contactus_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="contactus_content2" id="contactus_content2"
                                                      class="ckeditor">{{ $cms['contactus_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('contactus_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="contactus_header3"
                                                   value="{{ $cms['contactus_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('contactus_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="contactus_content3" id="contactus_content3"
                                                      class="ckeditor">{{ $cms['contactus_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('contactus_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="contactus_header4"
                                                   value="{{ $cms['contactus_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('contactus_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="contactus_content4" id="contactus_content4"
                                                      class="ckeditor">{{ $cms['contactus_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('contactus_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="contactus_header5"
                                                   value="{{ $cms['contactus_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('contactus_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="contactus_content5" id="contactus_content5"
                                                      class="ckeditor">{{ $cms['contactus_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('contactus_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="contactus_image1">
                                            <div class="text-danger">
                                                @error('contactus_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['contactus_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="contactus_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/storage/cms/' . $cms['contactus_image1']) }}"
                                                     src="{{ asset('/storage/cms/' . $cms['contactus_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="contacus_image2">
                                            <div class="text-danger">
                                                @error('contacus_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['contacus_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="contacus_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/storage/cms/' . $cms['contacus_image2']) }}"
                                                     src="{{ asset('/storage/cms/' . $cms['contacus_image2']) }}"
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



                                <div class="tab-pane fade " id="nav-bookingtable" role="tabpanel"
                                     aria-labelledby="nav-bookingtable-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="bookingtable_header1"
                                                   value="{{ $cms['bookingtable_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookingtable_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="bookingtable_content1" id="bookingtable_content1"
                                                      class="ckeditor">{{ $cms['bookingtable_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('bookingtable_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="bookingtable_header2"
                                                   value="{{ $cms['bookingtable_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookingtable_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="bookingtable_content2" id="bookingtable_content2"
                                                      class="ckeditor">{{ $cms['bookingtable_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bookingtable_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="bookingtable_header3"
                                                   value="{{ $cms['bookingtable_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookingtable_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="bookingtable_content3" id="bookingtable_content3"
                                                      class="ckeditor">{{ $cms['bookingtable_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('bookingtable_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="bookingtable_header4"
                                                   value="{{ $cms['bookingtable_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookingtable_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="bookingtable_content4" id="bookingtable_content4"
                                                      class="ckeditor">{{ $cms['bookingtable_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bookingtable_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="bookingtable_header5"
                                                   value="{{ $cms['bookingtable_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookingtable_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="bookingtable_content5" id="bookingtable_content5"
                                                      class="ckeditor">{{ $cms['bookingtable_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bookingtable_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="bookingtable_content6" id="bookingtable_content6"
                                                      class="ckeditor">{{ $cms['bookingtable_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bookingtable_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="bookingtable_content7" id="bookingtable_content7"
                                                      class="ckeditor">{{ $cms['bookingtable_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bookingtable_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="bookingtable_image1">
                                            <div class="text-danger">
                                                @error('bookingtable_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['bookingtable_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="bookingtable_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/storage/cms/' . $cms['bookingtable_image1']) }}"
                                                     src="{{ asset('/storage/cms/' . $cms['bookingtable_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="bookingtable_image2">
                                            <div class="text-danger">
                                                @error('bookingtable_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['bookingtable_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="bookingtable_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/storage/cms/' . $cms['bookingtable_image2']) }}"
                                                     src="{{ asset('/storage/cms/' . $cms['bookingtable_image2']) }}"
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

