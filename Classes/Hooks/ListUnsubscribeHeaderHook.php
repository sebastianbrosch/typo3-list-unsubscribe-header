<?php
namespace ListUnsubscribeHeader\Hooks;

class ListUnsubscribeHeaderHook
{
    /**
     * @param array $params
     * @param object $parentObject
     */
    public function header($params, $parentObject) {
        $header = $params['header'];

        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $configurationManager = $objectManager->get('TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface');
        $settings = $configurationManager->getConfiguration(
            \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT,
            'list_unsubscribe_header'
        );

        //get the email and the url of the extension configuration.
        $email = $settings['plugin.']['list_unsubscribe_header.']['settings.']['email'];
        $url = $settings['plugin.']['list_unsubscribe_header.']['settings.']['url'];

        //depending on the available configuration, create the List-Unsubscribe header for Direct Mail.
        if ($email !== '' && $url !== '') {
            $header->addTextHeader('List-Unsubscribe', '<mailto: '.$email.'>, <'.$url.'>');
        } else if ($email !== '') {
            $header->addTextHeader('List-Unsubscribe', '<mailto: '.$email.'>');
        } else if ($url !== '') {
            $header->addTextHeader('List-Unsubscribe', '<'.$url.'>');
        }
    }
}