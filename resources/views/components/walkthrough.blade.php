@php
  $steps = [
    'Input Data Anak',
    'Input Data Orang Tua',
    'Pemilihan Program',
    'Pembayaran Pendaftaran',
    'Wawancara dan Seleksi',
    'Pembayaran Pendidikan',
    'pengumuman',
  ];
@endphp

<div class="w-full py-7 bg-white">
  <!-- Desktop view (hidden on mobile) -->
  <div class="hidden md:flex flex-col">
    <!-- STEP CIRCLES + LINES -->
    <div class="grid grid-cols-7 items-center overflow-hidden">
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
          <div class="h-1.5 flex-grow {{ $leftLineColor }} rounded-r-full"></div>
          <div class="w-8 h-8 {{ $circleColor }} rounded-full grid place-items-center mx-auto">
            <span class="text-xs font-bold font-['Poppins'] text-center">{{ $stepNumber }}</span>
          </div>
          <div class="h-1.5 flex-grow {{ $rightLineColor }} rounded-l-full"></div>
        </div>
      @endforeach
    </div>
    <!-- LABELS -->
    <div class="grid grid-cols-7 gap-1 mt-4">
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

  <!-- Mobile view (hidden on desktop) -->
  <div class="md:hidden">
    <div class="relative">
      <!-- Progress bar -->
      <div class="h-1.5 w-full bg-gray-300 rounded-full">
        <div class="h-1.5 bg-purple-950 rounded-full" style="width: {{ min(100, ($currentStep + 1) / count($steps) * 100) }}%"></div>
      </div>
      
      <!-- Current step indicator -->
      <div class="mt-4 pl-11 flex items-center">
        <div class="w-8 h-8 bg-purple-950 text-white rounded-full grid place-items-center">
          <span class="text-xs font-bold font-['Poppins']">{{ $currentStep + 1 }}</span>
        </div>
        <div class="ml-3">
          <p class="text-purple-950 font-bold text-sm font-['Poppins']">Langkah {{ $currentStep + 1 }} dari {{ count($steps) }}</p>
          <p class="text-purple-950 font-semibold text-md font-['Poppins']">{{ $steps[$currentStep] }}</p>
        </div>
      </div>
      
      <!-- Upcoming steps (only show next 2 steps) -->
      <div class="mt-2 pl-11">
        @for ($i = $currentStep + 1; $i < min(count($steps), $currentStep + 3); $i++)
          <div class="flex items-center mt-2">
            <div class="w-6 h-6 bg-gray-300 text-gray-500 rounded-full grid place-items-center">
              <span class="text-xs font-semibold font-['Poppins']">{{ $i + 1 }}</span>
            </div>
            <span class="ml-3 text-gray-400 text-sm font-medium font-['Poppins']">{{ $steps[$i] }}</span>
          </div>
        @endfor
      </div>
    </div>
  </div>
</div>