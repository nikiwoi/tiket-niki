@php
    $ticketCatalog = [
        'ga' => ['label' => 'General Admission', 'price' => 75],
        'vip' => ['label' => 'VIP Experience', 'price' => 150],
        'meet-greet' => ['label' => 'Meet & Greet', 'price' => 250],
    ];

    $selectedKey = $ticketType ?? 'ga';
    $ticketInfo = $ticketCatalog[$selectedKey] ?? ['label' => ucfirst((string) $selectedKey), 'price' => 75];
    $qty = max(1, (int) ($quantity ?? 1));
    $unitPrice = $ticketInfo['price'];
    $totalPrice = $unitPrice * $qty;
    $referenceCode = $bookingCode ?? 'NNT-2026-VIP';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - Neon Nights Tour</title>
</head>
<body style="margin: 0; padding: 0; background-color: #0f172a; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #f8fafc;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #0f172a; padding: 32px 16px;">
        <tr>
            <td align="center">
                <!-- Main Container -->
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width: 560px; background: linear-gradient(145deg, #1e1b4b 0%, #111827 60%, #3b0764 100%); background-color: #111827; border: 1px solid rgba(168, 85, 247, 0.3); border-radius: 16px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);">
                    
                    <!-- Top Accent Banner -->
                    <tr>
                        <td style="background: linear-gradient(90deg, #9333ea 0%, #4f46e5 100%); height: 6px; font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>

                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding: 36px 32px 16px 32px;">
                            <div style="display: inline-block; background-color: rgba(168, 85, 247, 0.15); border: 1px solid rgba(168, 85, 247, 0.4); border-radius: 9999px; padding: 6px 14px; font-size: 12px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; color: #c084fc; margin-bottom: 16px;">
                                Registration Confirmed
                            </div>
                            <h1 style="margin: 0 0 8px 0; font-size: 28px; font-weight: 700; color: #ffffff; letter-spacing: -0.5px;">
                                Neon Nights Tour
                            </h1>
                            <p style="margin: 0; font-size: 15px; color: #cbd5e1; line-height: 1.5;">
                                Get ready for an unforgettable night! Your concert ticket registration has been received.
                            </p>
                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td style="padding: 16px 32px 8px 32px;">
                            <p style="margin: 0; font-size: 15px; color: #e2e8f0; line-height: 1.6;">
                                Hi <strong style="color: #ffffff;">{{ $name ?? 'Concert Goer' }}</strong>,
                            </p>
                            <p style="margin: 8px 0 0 0; font-size: 14px; color: #94a3b8; line-height: 1.6;">
                                Thank you for registering for the <strong style="color: #c084fc;">Neon Nights Tour</strong>. Below is a summary of your ticket reservation details.
                            </p>
                        </td>
                    </tr>

                    <!-- Ticket Summary Card -->
                    <tr>
                        <td style="padding: 16px 32px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: rgba(30, 41, 59, 0.75); border: 1px solid rgba(148, 163, 184, 0.2); border-radius: 12px; overflow: hidden;">
                                <!-- Booking Reference Header -->
                                <tr>
                                    <td colspan="2" style="background-color: rgba(139, 92, 246, 0.15); padding: 14px 20px; border-bottom: 1px dashed rgba(148, 163, 184, 0.25);">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.8px; color: #94a3b8;">
                                                    Booking Reference
                                                </td>
                                                <td align="right" style="font-size: 14px; font-weight: 700; font-family: monospace; color: #c084fc; letter-spacing: 1px;">
                                                    {{ $referenceCode }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Attendee Name -->
                                <tr>
                                    <td style="padding: 12px 20px 6px 20px; font-size: 13px; color: #94a3b8;">Full Name</td>
                                    <td align="right" style="padding: 12px 20px 6px 20px; font-size: 14px; font-weight: 600; color: #f8fafc;">
                                        {{ $name ?? 'Concert Goer' }}
                                    </td>
                                </tr>

                                @if(!empty($email))
                                <tr>
                                    <td style="padding: 6px 20px; font-size: 13px; color: #94a3b8;">Email Address</td>
                                    <td align="right" style="padding: 6px 20px; font-size: 14px; color: #e2e8f0;">
                                        {{ $email }}
                                    </td>
                                </tr>
                                @endif

                                @if(!empty($phone))
                                <tr>
                                    <td style="padding: 6px 20px; font-size: 13px; color: #94a3b8;">Phone Number</td>
                                    <td align="right" style="padding: 6px 20px; font-size: 14px; color: #e2e8f0;">
                                        {{ $phone }}
                                    </td>
                                </tr>
                                @endif

                                <!-- Ticket Type -->
                                <tr>
                                    <td style="padding: 6px 20px; font-size: 13px; color: #94a3b8;">Ticket Tier</td>
                                    <td align="right" style="padding: 6px 20px; font-size: 14px; font-weight: 600; color: #a78bfa;">
                                        {{ $ticketInfo['label'] }} (${{ number_format($unitPrice, 2) }})
                                    </td>
                                </tr>

                                <!-- Quantity -->
                                <tr>
                                    <td style="padding: 6px 20px 14px 20px; font-size: 13px; color: #94a3b8; border-bottom: 1px solid rgba(148, 163, 184, 0.15);">Quantity</td>
                                    <td align="right" style="padding: 6px 20px 14px 20px; font-size: 14px; font-weight: 600; color: #f8fafc; border-bottom: 1px solid rgba(148, 163, 184, 0.15);">
                                        {{ $qty }} {{ $qty === 1 ? 'Ticket' : 'Tickets' }}
                                    </td>
                                </tr>

                                <!-- Total Amount -->
                                <tr>
                                    <td style="padding: 14px 20px; font-size: 14px; font-weight: 600; color: #e2e8f0;">Total Estimated</td>
                                    <td align="right" style="padding: 14px 20px; font-size: 18px; font-weight: 700; color: #ffffff;">
                                        ${{ number_format($totalPrice, 2) }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Event Details Box -->
                    <tr>
                        <td style="padding: 8px 32px 24px 32px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: rgba(17, 24, 39, 0.6); border-left: 3px solid #8b5cf6; border-radius: 6px; padding: 12px 16px;">
                                <tr>
                                    <td style="font-size: 13px; color: #cbd5e1; line-height: 1.5;">
                                        <strong style="color: #ffffff; display: block; margin-bottom: 4px;">What happens next?</strong>
                                        Please keep this email and your booking reference <strong style="color: #c084fc;">{{ $referenceCode }}</strong> handy. Present it at the venue entrance along with a valid photo ID to claim your passes.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- CTA Button -->
                    <tr>
                        <td align="center" style="padding: 0 32px 32px 32px;">
                            <a href="{{ url('/') }}" style="display: inline-block; background: linear-gradient(90deg, #9333ea 0%, #4f46e5 100%); background-color: #7c3aed; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; padding: 12px 28px; border-radius: 8px; box-shadow: 0 4px 12px rgba(124, 58, 237, 0.35);">
                                View Event Page
                            </a>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: rgba(15, 23, 42, 0.8); padding: 20px 32px; border-top: 1px solid rgba(255, 255, 255, 0.08);">
                            <p style="margin: 0 0 6px 0; font-size: 12px; color: #64748b;">
                                &copy; {{ date('Y') }} Neon Nights Tour. All rights reserved.
                            </p>
                            <p style="margin: 0; font-size: 11px; color: #475569;">
                                If you did not make this registration, please disregard this email.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>

