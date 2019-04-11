<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Process extends AbstractAction
{
    public function getTitle()
    {
        return 'Обработать';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        $id = json_decode($this->data->{$this->data->getKeyName()});

        return [
            'class' => 'btn btn-sm btn-primary pull-right ordproc',
            'name'=>"orderprocessing[$id]",
        ];
    }
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'orders';
    }
    public function getDefaultRoute()
    {
        return route('ordproc',['id'=>$this->data->{$this->data->getKeyName()}]);
    }
}