<!-- resources/views/livewire/typing-loader-component.blade.php -->
<style>
    .typing {
    display: block;
    width: 60px;
    height: 40px;
    border-radius: 20px;
    margin: 0 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #abefab;
    }

    .circle {
    display: block;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background-color: #000000;
    margin: 3px;
    }
    .circle.scaling {
    animation: typing 1000ms ease-in-out infinite;
    animation-delay: 3600ms;
    }
    .circle.bouncing {
    animation: bounce 1000ms ease-in-out infinite;
    animation-delay: 3600ms;
    }

    .circle:nth-child(1) {
    animation-delay: 0ms;
    }

    .circle:nth-child(2) {
    animation-delay: 333ms;
    }

    .circle:nth-child(3) {
    animation-delay: 666ms;
    }

    @keyframes typing {
    0% {
        transform: scale(1);
    }
    33% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.4);
    }
    100% {
        transform: scale(1);
    }
    }

    @keyframes bounce {
    0% {
        transform: translateY(0);
    }
    33% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
    }

</style>

<div class="typing">
    <span class="circle scaling"></span>
    <span class="circle scaling"></span>
    <span class="circle scaling"></span>
  </div>
