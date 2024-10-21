
    @props(['for'])
    @error($for)
    <div class="flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"  height="32" width="32"><g fill="none" fill-rule="nonzero">
            <path d="M32 0v32H0V0h32ZM16.790666666666667 31.010666666666665l-0.014666666666666665 0.0026666666666666666 -0.09466666666666665 0.04666666666666667 -0.026666666666666665 0.005333333333333333 -0.018666666666666665 -0.005333333333333333 -0.09466666666666665 -0.04666666666666667c-0.013333333333333332 -0.005333333333333333 -0.025333333333333333 -0.0013333333333333333 -0.032 0.006666666666666666l-0.005333333333333333 0.013333333333333332 -0.02266666666666667 0.5706666666666667 0.006666666666666666 0.026666666666666665 0.013333333333333332 0.017333333333333333 0.13866666666666666 0.09866666666666665 0.019999999999999997 0.005333333333333333 0.016 -0.005333333333333333 0.13866666666666666 -0.09866666666666665 0.016 -0.021333333333333333 0.005333333333333333 -0.02266666666666667 -0.02266666666666667 -0.5693333333333332c-0.0026666666666666666 -0.013333333333333332 -0.011999999999999999 -0.02266666666666667 -0.02266666666666667 -0.023999999999999997Zm0.35333333333333333 -0.15066666666666667 -0.017333333333333333 0.0026666666666666666 -0.24666666666666665 0.124 -0.013333333333333332 0.013333333333333332 -0.004 0.014666666666666665 0.023999999999999997 0.5733333333333333 0.006666666666666666 0.016 0.010666666666666666 0.009333333333333332 0.268 0.124c0.016 0.005333333333333333 0.030666666666666665 0 0.03866666666666667 -0.010666666666666666l0.005333333333333333 -0.018666666666666665 -0.04533333333333334 -0.8186666666666667c-0.004 -0.016 -0.013333333333333332 -0.026666666666666665 -0.026666666666666665 -0.02933333333333333Zm-0.9533333333333333 0.0026666666666666666a0.030666666666666665 0.030666666666666665 0 0 0 -0.036 0.008l-0.008 0.018666666666666665 -0.04533333333333334 0.8186666666666667c0 0.016 0.009333333333333332 0.026666666666666665 0.02266666666666667 0.032l0.019999999999999997 -0.0026666666666666666 0.268 -0.124 0.013333333333333332 -0.010666666666666666 0.005333333333333333 -0.014666666666666665 0.02266666666666667 -0.5733333333333333 -0.004 -0.016 -0.013333333333333332 -0.013333333333333332 -0.24533333333333332 -0.12266666666666666Z" stroke-width="1"></path><path fill="#f00" d="m17.732 4.197333333333333 11.512 19.938666666666666a2 2 0 0 1 -1.7319999999999998 3H4.4879999999999995a2 2 0 0 1 -1.7319999999999998 -3l11.512 -19.938666666666666c0.7693333333333332 -1.3333333333333333 2.6933333333333334 -1.3333333333333333 3.4639999999999995 0ZM16 6.530666666666666 5.642666666666667 24.46933333333333h20.714666666666666L16 6.530666666666666ZM16 20a1.3333333333333333 1.3333333333333333 0 1 1 0 2.6666666666666665 1.3333333333333333 1.3333333333333333 0 0 1 0 -2.6666666666666665Zm0 -9.333333333333332a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 1.3333333333333333v5.333333333333333a1.3333333333333333 1.3333333333333333 0 1 1 -2.6666666666666665 0V12a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 -1.3333333333333333Z" stroke-width="1"></path></g></svg>
        <p {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400']) }}>{{ $message }}</p>
    </div>
    @enderror
