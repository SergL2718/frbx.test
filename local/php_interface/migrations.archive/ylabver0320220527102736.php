<?php

namespace Sprint\Migration;

class ylabver0320220527102736 extends Version
{
    protected $description = "Миграция для создания полей свойств, 2-x ИБ 'Контакты', 'Адреса'";

    protected $moduleVersion = "4.0.6";

    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId2 = $helper->Iblock()->getIblockIdIfExists('contacts','user_contacts' );

        $helper->Iblock()->addPropertyIfNotExists($iblockId2, [
            'NAME' => 'Адрес',
            'ACTIVE' => 'Y',
            'SORT' => '20',
            'CODE' => 'ADDRESS',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'E',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => 'contacts:adress',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
            'FEATURES' =>
                array (
                    0 =>
                        array (
                            'MODULE_ID' => 'iblock',
                            'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
                            'IS_ENABLED' => 'N',
                        ),
                    1 =>
                        array (
                            'MODULE_ID' => 'iblock',
                            'FEATURE_ID' => 'LIST_PAGE_SHOW',
                            'IS_ENABLED' => 'Y',
                        ),
                ),
        ]);

    }

    public function down()
    {

        $helper = $this->getHelperManager();

        $iblockId2 = $helper->Iblock()->getIblockIdIfExists('contacts','user_contacts' );
        $helper->Iblock()->deletePropertyIfExists($iblockId2, 'ADDRESS');

    }
}

