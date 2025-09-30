@props(['tentang' => null])

<div class="card">
    <div class="card-body">
        <form action="{{ $tentang ? route('dashboard.tentang.update', $tentang->id) : route('dashboard.tentang.store') }}" 
              method="POST" 
              enctype="multipart/form-data" 
              class="needs-validation" 
              novalidate>
            @csrf
            @if($tentang)
                @method('PUT')
            @endif

            <!-- Deskripsi Section -->
            <div class="row mb-5">
                <div class="col-md-12 mb-4">
                    <h4 class="border-bottom pb-2">Deskripsi Utama</h4>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" 
                               class="form-control @error('judul') is-invalid @enderror" 
                               id="judul" 
                               name="judul" 
                               value="{{ old('judul', $tentang?->judul) }}" 
                               required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                  id="deskripsi" 
                                  name="deskripsi" 
                                  rows="6" 
                                  required>{{ old('deskripsi', $tentang?->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-block">Gambar Deskripsi Kiri</label>
                                @if($tentang?->gambar_deskripsi_kiri)
                                    <img src="{{ asset('storage/' . $tentang->gambar_deskripsi_kiri) }}" 
                                         class="img-preview img-fluid mb-3 d-block" 
                                         style="max-height: 200px">
                                @else
                                    <img class="img-preview img-fluid mb-3 d-none" style="max-height: 200px">
                                @endif
                                
                                <label for="gambar_deskripsi_kiri" class="form-label">Upload Gambar Baru</label>
                                <input type="file" 
                                       class="form-control @error('gambar_deskripsi_kiri') is-invalid @enderror" 
                                       id="gambar_deskripsi_kiri" 
                                       name="gambar_deskripsi_kiri" 
                                       accept="image/*"
                                       onchange="previewImage(this)">
                                @error('gambar_deskripsi_kiri')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-block">Gambar Deskripsi Kanan</label>
                                @if($tentang?->gambar_deskripsi_kanan)
                                    <img src="{{ asset('storage/' . $tentang->gambar_deskripsi_kanan) }}" 
                                         class="img-preview img-fluid mb-3 d-block" 
                                         style="max-height: 200px">
                                @else
                                    <img class="img-preview img-fluid mb-3 d-none" style="max-height: 200px">
                                @endif
                                
                                <label for="gambar_deskripsi_kanan" class="form-label">Upload Gambar Baru</label>
                                <input type="file" 
                                       class="form-control @error('gambar_deskripsi_kanan') is-invalid @enderror" 
                                       id="gambar_deskripsi_kanan" 
                                       name="gambar_deskripsi_kanan" 
                                       accept="image/*"
                                       onchange="previewImage(this)">
                                @error('gambar_deskripsi_kanan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visi Section -->
            <div class="row mb-5">
                <div class="col-md-12 mb-4">
                    <h4 class="border-bottom pb-2">Visi</h4>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="visi" class="form-label">Visi Perusahaan</label>
                        <textarea class="form-control @error('visi') is-invalid @enderror" 
                                  id="visi" 
                                  name="visi" 
                                  rows="6" 
                                  required>{{ old('visi', $tentang?->visi) }}</textarea>
                        @error('visi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-block">Gambar Visi Kiri</label>
                                @if($tentang?->gambar_visi_kiri)
                                    <img src="{{ asset('storage/' . $tentang->gambar_visi_kiri) }}" 
                                         class="img-preview img-fluid mb-3 d-block" 
                                         style="max-height: 200px">
                                @else
                                    <img class="img-preview img-fluid mb-3 d-none" style="max-height: 200px">
                                @endif
                                
                                <label for="gambar_visi_kiri" class="form-label">Upload Gambar Baru</label>
                                <input type="file" 
                                       class="form-control @error('gambar_visi_kiri') is-invalid @enderror" 
                                       id="gambar_visi_kiri" 
                                       name="gambar_visi_kiri" 
                                       accept="image/*"
                                       onchange="previewImage(this)">
                                @error('gambar_visi_kiri')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-block">Gambar Visi Kanan</label>
                                @if($tentang?->gambar_visi_kanan)
                                    <img src="{{ asset('storage/' . $tentang->gambar_visi_kanan) }}" 
                                         class="img-preview img-fluid mb-3 d-block" 
                                         style="max-height: 200px">
                                @else
                                    <img class="img-preview img-fluid mb-3 d-none" style="max-height: 200px">
                                @endif
                                
                                <label for="gambar_visi_kanan" class="form-label">Upload Gambar Baru</label>
                                <input type="file" 
                                       class="form-control @error('gambar_visi_kanan') is-invalid @enderror" 
                                       id="gambar_visi_kanan" 
                                       name="gambar_visi_kanan" 
                                       accept="image/*"
                                       onchange="previewImage(this)">
                                @error('gambar_visi_kanan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="row mb-5">
                <div class="col-md-12 mb-4">
                    <h4 class="border-bottom pb-2">Misi</h4>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="misi" class="form-label">Misi Perusahaan</label>
                        <textarea class="form-control @error('misi') is-invalid @enderror" 
                                  id="misi" 
                                  name="misi" 
                                  rows="6" 
                                  required>{{ old('misi', $tentang?->misi) }}</textarea>
                        <small class="form-text text-muted">Pisahkan setiap poin misi dengan baris baru (Enter)</small>
                        @error('misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label d-block">Gambar Misi Saat Ini</label>
                        @if($tentang?->gambar_misi)
                            <img src="{{ asset('storage/' . $tentang->gambar_misi) }}" 
                                 class="img-preview img-fluid mb-3 d-block" 
                                 style="max-height: 200px">
                        @else
                            <img class="img-preview img-fluid mb-3 d-none" style="max-height: 200px">
                        @endif
                        
                        <label for="gambar_misi" class="form-label">Upload Gambar Baru</label>
                        <input type="file" 
                               class="form-control @error('gambar_misi') is-invalid @enderror" 
                               id="gambar_misi" 
                               name="gambar_misi" 
                               accept="image/*"
                               onchange="previewImage(this, 'misi')">
                        @error('gambar_misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>
                        {{ $tentang ? 'Update Data' : 'Simpan Data' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    function previewImage(input, type) {
        const preview = input.parentElement.querySelector('.img-preview');
        preview.classList.remove('d-none');
        preview.classList.add('d-block');
        
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endpush
