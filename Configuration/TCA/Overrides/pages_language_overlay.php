<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
  'pages_language_overlay',
  array(
    'media' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.media',
      'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('media', array(
        // custom configuration for displaying fields in the overlay/reference table
        // to use the imageoverlayPalette instead of the basicoverlayPalette
        'foreign_types' => array(
          '0' => array(
            'showitem' => '
              --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
              --palette--;;filePalette'
          ),
          \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
            'showitem' => '
              --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
              --palette--;;filePalette'
          ),
          \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
            'showitem' => '
              --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
              --palette--;;filePalette'
          ),
          \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
            'showitem' => '
              --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
              --palette--;;filePalette'
          ),
          \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
            'showitem' => '
              --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
              --palette--;;filePalette'
          ),
          \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
            'showitem' => '
              --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
              --palette--;;filePalette'
            )
          )
        )
      )
    )
  )
);