@php
  $steps = [
    'Input Data Anak',
    'Input Data Orang Tua',
    'Pembayaran Pendaftaran',
    'Pemilihan Program',
    'Form Lanjutan',
    'Wawancara dan Seleksi',
    'Konfirmasi',
    'Pembayaran Pendidikan',
  ];
@endphp

<div class="w-full py-8 bg-white">
  <div class="flex flex-col">
    <!-- STEP CIRCLES + LINES -->
    <div class="grid grid-cols-8 items-center overflow-hidden">
      @foreach ($steps as $index => $label)
        @php
          $stepNumber = $index + 1;
          $isActive = $stepNumber <= $currentStep + 1;
          $nextStepActive = ($stepNumber + 1) <= $currentStep + 1;
          $circleColor = $isActive ? 'bg-purple-950 text-white' : 'bg-gray-300 text-gray-500';
          $leftLineColor = $isActive ? 'bg-purple-950' : 'bg-gray-300';
          $rightLineColor = $nextStepActive ? 'bg-purple-950' : 'bg-gray-300';
        @endphp
        <div class="flex gap-2 items-center">
          <div class="hidden md:block h-1.5 flex-grow {{ $leftLineColor }} rounded-r-full"></div>
          <div class="w-8 h-8 {{ $circleColor }} rounded-full grid place-items-center mx-auto">
            <span class="text-xs font-bold font-['Poppins'] text-center">{{ $stepNumber }}</span>
          </div>
          <div class="hidden md:block h-1.5 flex-grow {{ $rightLineColor }} rounded-l-full"></div>
        </div>
      @endforeach
    </div>
    <!-- LABELS -->
    <div class="grid grid-cols-8 gap-1 mt-4">
      @foreach ($steps as $index => $label)
        @php
          $stepNumber = $index + 1;
          $isActive = $stepNumber <= $currentStep + 1;
          $textColor = $isActive ? 'text-purple-950' : 'text-gray-400';
        @endphp
        <span class="w-24 mx-auto text-center text-[12px] font-semibold font-['Poppins'] text-wrap {{ $textColor }}">
          {{ $label }}
        </span>
      @endforeach
    </div>
  </div>
</div>