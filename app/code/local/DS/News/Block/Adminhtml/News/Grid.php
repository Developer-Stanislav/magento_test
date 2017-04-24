<?php

class DS_News_Block_Adminhtml_News_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('dsnews/news')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('ds_news');
//ALTER TABLE `ds_news_entities` ADD `status` INT(1) NOT NULL AFTER `content`;
        $this->addColumn('news_id', array(
            'header' => $helper->__('News ID'),
            'index' => 'news_id'
        ));

        $this->addColumn('title', array(
            'header' => $helper->__('Title'),
            'index' => 'title',
            'type' => 'text',
        ));

        $this->addColumn('status', array(
            'header' => $helper->__('Status'),
            'index' => 'status',
            'type' => 'options',
            'options' => array(
                0 => $helper->__('No'),
                1 => $helper->__('Yes')
            )

        /*    'type' => 'options',
            'options' => array(
        '1' => Mage::helper('catalog')->__('Yes'),
        '0' => Mage::helper('catalog')->__('No'),
    ),*/
        ));

        $this->addColumn('created', array(
            'header' => $helper->__('Created'),
            'index' => 'created',
            'type' => 'date',
        ));

        return parent::_prepareColumns();
    }

    protected function _prepareMassaction()
    {
        $items = $this->getMassactionBlock()->getItems();


        $this->setMassactionIdField('news_id');
        $this->getMassactionBlock()->setFormFieldName('news');
        $this->getMassactionBlock()
            ->addItem('enable', array(
                'label' => $this->__('Enable'),
                'url' => $this->getUrl('*/*/massEnable'),
            ))
            ->addItem('disable', array(
                'label' => $this->__('Disable'),
                'url' => $this->getUrl('*/*/massDisable'),
            ))
            ->addItem('delete', array(
                    'label' => $this->__('Delete'),
                    'url' => $this->getUrl('*/*/massDelete'),
                )
            );
        return $this;
    }
    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $model->getId(),
        ));
    }


}