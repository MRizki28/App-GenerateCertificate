<?php

namespace App\Repositories;

use App\Interfaces\TemplateCertificateInterfaces;
use App\Models\TemplateCertificateModel;
use App\Traits\HttpResponseTrait;

class TemplateCertificateRepositories implements TemplateCertificateInterfaces
{
    use HttpResponseTrait;

    protected $templateModel;

    public function __construct(TemplateCertificateModel $templateModel)
    {
        $this->templateModel = $templateModel;
    }

    public function getAllData()
    {
        $data = $this->templateModel->all();
        if ($data->isEmpty()) {
            return $this->dataNotFound();
        } else {
            return $this->success($data);
        }
    }
}
