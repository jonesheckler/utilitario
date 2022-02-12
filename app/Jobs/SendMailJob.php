<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $dados;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $dados)
    {
        $this->dados = $dados;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $data = [];
        $data['user_id'] = 1;
        Mail::send('emails.padrao', ['corpo' => $this->dados['corpo'], 'template' => $this->dados['options']['template'], 'data' => $data], function ($m) {
            //$m->from(env('MAIL_FROM_ADDRESS'), config('app.name'));
            $m->to($this->dados['destinatario']);
            $m->subject($this->dados['assunto']);
        });
    }

    public function failed(Throwable $exception)
    {
        // se ocorre um erro ele envia um email para alertar
        $data = [];
        $data['user_id'] = 1;
        $corpo = $exception->getMessage();
        Mail::send('emails.padrao', ['corpo' => $corpo, 'template' => 'clique', 'data' => $data], function ($m) {
            //$m->from(env('MAIL_FROM_ADDRESS'), config('app.name'));
            $m->to('mw10@mw10.com.br');
            $m->subject('Erro no Job EnviarEmailMonitoramentoPessoaJob');
        });
    }
}
