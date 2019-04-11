<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Cancel extends AbstractAction
{
    public function getTitle()
    {
        return 'Отменить';
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
            'class' => 'btn btn-sm btn-warning pull-right ordcancel',
            'name'=>"ordercancelling[$id]",
        ];
    }
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'orders';
    }
    public function getDefaultRoute()
    {
        return route('ordcancel',['id'=>$this->data->{$this->data->getKeyName()}]);
    }
}
