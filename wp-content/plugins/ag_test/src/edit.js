import { __ } from '@wordpress/i18n';
import {
  ColorPicker,
  ToolbarButton,
  CheckboxControl,
  Button,
} from '@wordpress/components';
import { image } from '@wordpress/icons';
import {
  useBlockProps,
  BlockControls,
  RichText,
  MediaUpload,
  MediaUploadCheck,
  InnerBlocks,
} from '@wordpress/block-editor';
const { Fragment } = wp.element;

export default function Edit({ attributes, setAttributes }) {
  const { content, imageUrl, backgroundColor, isChecked, order, heading } =
    attributes;

  return (
    <Fragment>
      <BlockControls>
        <ToolbarButton
          icon={image}
          label='Image left/right'
          onClick={() => setAttributes({ order: !order })}
        />

        <CheckboxControl
          label='Color'
          checked={isChecked}
          onChange={(checked) => setAttributes({ isChecked: checked })}
        />

        <ColorPicker
          color={backgroundColor}
          onChange={(color) => setAttributes({ backgroundColor: color })}
          enableAlpha
        />
        <MediaUploadCheck>
          <MediaUpload
            allowedTypes={['image']}
            multiple={false}
            value={imageUrl}
            onSelect={(media) => setAttributes({ imageUrl: media.url })}
            render={({ open }) => <Button onClick={open}>Open Image</Button>}
          />
        </MediaUploadCheck>
      </BlockControls>

      <div {...useBlockProps()}>
        <div style={{ background: backgroundColor }} id='data'>
          <RichText
            tagName='h1'
            value={heading}
            onChange={(newContent) => setAttributes({ heading: newContent })}
            style={{
              textAlign: 'center',
              color: isChecked ? 'black' : 'white',
            }}
            placeholder='Add a title'
          />
          <div
            id='main-block'
            style={{ flexDirection: order ? 'row' : 'row-reverse' }}
          >
            <div
              style={{
                color: isChecked ? 'black' : 'white',
              }}
            >
              <RichText
                tagName='p'
                value={content}
                onChange={(newContent) =>
                  setAttributes({ content: newContent })
                }
                style={{
                  color: isChecked ? 'black' : 'white',
                  margin: '0',
                }}
              />
            </div>

            <div style={{ position: 'relative', width: '50%' }}>
              <img src={imageUrl} alt='no-image' />
            </div>
          </div>
        </div>
      </div>
    </Fragment>
  );
}
