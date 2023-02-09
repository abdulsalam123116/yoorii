<?php $color        =   '#333333';?>
    <!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet" type="text/css">
    <title>INV-<?php echo e($order->code); ?></title>
    <style>
        body {
            font-family: '<?php echo e($order->font_name); ?>';
            font-size: 10pt;
            line-height: 13pt;
            color: #000;
        }
        p {
            margin: 4pt 0 0 0;
        }
        td {
            vertical-align: top;
        }
        .items td {
            border: 0.2mm solid #dadee1;
            background-color: #ffffff;
        }
        .items tr.border-less td {
            border: 0;
            background-color: #ffffff;
        }
        table thead td {
            vertical-align: bottom;
            text-transform: uppercase;
            font-size: 8pt;
            font-weight: bold;
            background-color: #dadee1;
            color: #333;
        }
        table thead td {
            border-bottom: 0.2mm solid #dadee1;
        }
        table .last td {
            border-bottom: 0.2mm solid #dadee1;
        }
        table .first td {
            border-top: 0.2mm solid #dadee1;
        }
        .watermark {
            text-transform: uppercase;
            font-weight: bold;
            position: absolute;
            left: 100px;
            top: 400px;
        }
        .left{
            text-align: left;
        }
        .right{
            text-align: right;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
<table width="100%">
    <tr>
        <td width="32%" class="d-inline-block">
            <?php
                $logo = settingHelper('invoice_logo');
            ?>
            <a href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(($logo != [] && @is_file_exists($logo['image_118x45'])) ? static_asset($logo['image_118x45']) : static_asset('images/default/dark-logo.png')); ?>" alt="Logo">
            </a>
        </td>
        <td width="3%" class="right"></td>
        <td width="30%" class="center">
            <strong><?php echo e(settingHelper('system_name')); ?></strong>
            <p><?php echo e(settingHelper('contact_email') ? : settingHelper('header_contact_email')); ?></p>
            <p><?php echo e(settingHelper('contact_phone') ? : settingHelper('header_contact_phone')); ?></p>
        </td>
        <td width="3%" class="right"></td>
        <td width="32%" class="right"><div style="font-weight: bold; color:#333333; font-size: 16px; text-transform: uppercase;"><?php echo e(__('Invoice')); ?></div>
        </td>
    </tr>
</table>
<table width="100%" style="vertical-align: top;">
    <tr>
        <?php if(!$order->pickupHub): ?>
        <td width="32%">
            <?php
                $shipping_address = $order->shipping_address;
            ?>
            <?php if($shipping_address): ?>
                <table width="100%">
                    <tr>
                        <td width="100%" style="border-bottom:0.2mm solid #dadee1; font-size: 9pt; font-weight:bold; color: #333333; text-transform: uppercase;">
                            <?php echo e(__('Shipping To')); ?></td>
                    </tr>
                    <tr>
                        <td width="100%">

                            <strong><?php echo e($shipping_address['name']); ?></strong>
                            <p><?php echo e($shipping_address['address']); ?>, <?php echo e(@$shipping_address['city']); ?>, <?php echo e(@$shipping_address['country']); ?> </p>
                            <p><?php echo e(isDemoServer() ? emailAddressMask($shipping_address['email']) : $shipping_address['email']); ?> </p>
                            <p><?php echo e(@$shipping_address['phone_no']); ?></p>

                        </td>
                    </tr>
                </table>
            <?php endif; ?>
        </td>
        <td width="32%">
            <?php
                $billing_address = $order->billing_address;
            ?>
            <?php if($billing_address): ?>
                <table width="100%">
                    <tr>
                        <td width="100%" style="border-bottom:0.2mm solid #dadee1; font-size: 9pt; font-weight:bold; color: #333333; text-transform: uppercase;">
                            <?php echo e(__('Bill To')); ?></td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <strong><?php echo e($billing_address['name']); ?></strong>
                            <p><?php echo e($billing_address['address']); ?>, <?php echo e(@$billing_address['city']); ?>, <?php echo e(@$billing_address['country']); ?> </p>
                            <p><?php echo e(isDemoServer() ? emailAddressMask($billing_address['email']) : $billing_address['email']); ?></p>
                            <p><?php echo e(@$billing_address['phone_no']); ?></p>
                        </td>
                    </tr>
                </table>
            <?php endif; ?>
        </td>
        <?php else: ?>
            <td width="64%">
                <table width="100%">
                    <tr>
                        <td width="100%" style="border-bottom:0.2mm solid #dadee1; font-size: 9pt; font-weight:bold; color: #333333; text-transform: uppercase;">
                            <?php echo e(__('Pickup Hub')); ?></td>
                    </tr>
                    <tr>
                        <td width="100%">
                                <?php echo e(__('Name')); ?> : <?php echo e(@$order->pickupHub->name); ?><br>
                                <?php echo e(__('Manager')); ?> : <?php echo e(@$order->pickupHub->incharge->full_name); ?><br>
                                <?php echo e(__('Address')); ?> : <?php echo e(@$order->pickupHub->address); ?><br>
                        </td>
                    </tr>
                </table>
            </td>
        <?php endif; ?>


        <td width="38%">
            <table width="100%">
                <tr>
                    <td width="100%" style="border-bottom:0.2mm solid #dadee1; font-size: 9pt; font-weight:bold; color: #333333; text-transform: uppercase;">
                        <strong><?php echo e(__('Order Info')); ?></strong>
                </tr>
                <tr>
                    <td width="100%">
                        <p><strong><?php echo e(__('Order No')); ?>#</strong> <?php echo e($order->code); ?></p>
                        <p><?php echo e(__('Order Date')); ?> : <?php echo e(date('M d,Y', strtotime($order->date))); ?></p>
                        <p style="text-transform: capitalize"><?php echo e(__('Payment Type')); ?> : <?php echo e(str_replace('_',' ',$order->payment_type)); ?></p>
                        <p><?php echo e(__('Status')); ?> : <?php echo e($order->payment_status); ?></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table class="items" width="100%" style="border-spacing:3px; font-size: 9pt; border-collapse: collapse;" cellpadding="10">
    <thead >
    <tr>
        <td width="5%">#</td>
        <td width="35%"><?php echo e(__('Product')); ?></td>
        <td class="center" width="15%"><?php echo e(__('Unit Price')); ?></td>
        <td class="center" width="15%"><?php echo e(__('Quantity')); ?></td>
        <td class="center" width="10%"><?php echo e(__('Tax')); ?></td>
        <td class="right" width="20%"><?php echo e(__('Totals')); ?></td>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $order->orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="border-bottom: 1px solid #ccc;">
            <td><?php echo e($key+1); ?></td>
            <td>
                <div class="d-flex">
                    <?php if(!blank($orderDetail->product)): ?>
                        <div class="text-left">
                            <?php if($orderDetail->product->thumbnail != [] && is_file_exists($orderDetail->product->thumbnail['image_40x40'], $orderDetail->product->thumbnail['storage'])): ?>
                                <img
                                    src="<?php echo e(get_media($orderDetail->product->thumbnail['image_40x40'], $orderDetail->product->thumbnail['storage'])); ?>"
                                    alt="<?php echo e($orderDetail->product->name); ?>"
                                    class="mr-3 rounded">
                            <?php else: ?>
                                <img
                                    src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                    alt="<?php echo e($orderDetail->product->name); ?>"
                                    class="mr-3 rounded">
                            <?php endif; ?>
                        </div>
                        <div class="ml-1">
                            <?php echo e($orderDetail->product->getTranslation('name', \App::getLocale())); ?> <?php if($orderDetail->variation != null): ?>
                                (<?php echo e($orderDetail->variation); ?>) <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-left">
                            <img
                                src="<?php echo e(static_asset('images/default/default-image-40x40.png')); ?>"
                                alt="N/A"
                                class="mr-3 rounded">
                        </div>
                        <div class="ml-1">
                            N/A
                        </div>
                    <?php endif; ?>
                </div>
            </td>
            <td class="center"><?php echo e(get_price($orderDetail->price)); ?></td>
            <td class="center"><?php echo e($orderDetail->quantity); ?></td>
            <td class="center"><?php echo e($orderDetail->tax); ?></td>
            <td class="right"><?php echo e(get_price($orderDetail->price * $orderDetail->quantity)); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr class="border-less"  style="border-bottom: 1px solid #ececec !important;">
        <td colspan="5" align="right"><strong><?php echo e(__('Sub Total')); ?>:</strong></td>
        <td colspan="1" class="right"><strong><?php echo e(get_price($order->sub_total,user_curr())); ?></strong></td>
    </tr>
    <tr class="border-less">
        <td colspan="5" align="right">(-) <?php echo e(__('Discount')); ?>:</td>
        <td colspan="1" class="right"><?php echo e(get_price($order->discount,user_curr())); ?></td>
    </tr>
    <tr class="border-less">
        <td colspan="5" align="right">(-) <?php echo e(__('Coupon Discount')); ?>:</td>
        <td colspan="1" class="right"><?php echo e(get_price($order->coupon_discount,user_curr())); ?></td>
    </tr>
    <tr class="border-less">
        <td colspan="5" align="right">(+) <?php echo e(__('Total Tax')); ?>:</td>
        <td colspan="1" class="right">
            <?php echo e(get_price($order->total_tax,user_curr())); ?>

        </td>
    </tr>
    <tr class="border-less"  style="border-bottom: 1px solid #ececec !important;">
        <td colspan="5" align="right"><strong><?php echo e(__('Total Amount')); ?></strong></td>
        <td colspan="1" class="right"><strong><?php echo e(get_price($order->total_amount,user_curr())); ?></strong></td>
    </tr>
    <tr class="border-less">
        <td colspan="5" align="right">(+) <?php echo e(__('Shipping Cost')); ?>:</td>
        <td colspan="1" class="right"><?php echo e(get_price($order->shipping_cost,user_curr())); ?></td>
    </tr>
    <tr class="border-less">
        <td colspan="5" align="right"><strong><?php echo e(__('Net Payable')); ?>:</strong></td>
        <td colspan="1" class="right">
            <strong>
                <?php echo e(get_price($order->total_payable,user_curr())); ?>

            </strong>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
<?php /**PATH E:\raqmi plus\yoori\ass\resources\views/admin/orders/invoice.blade.php ENDPATH**/ ?>